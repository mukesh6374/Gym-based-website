<?php

// CONTROLS: W/S/A/D
// Click on the screen first to be able to move
//
// We need to be able to refresh the screen between key presses
// Therefore, we need a non-blocking way to read key presses
// Ncurses does not provide that, so we use the standard input
// Unfortunately it is not possible to read left/right/up/down keys that way 
putenv('TERM=xterm-color');

class Snake
{
  private $window;
	private $hasEnded = false;
	private $movementX;
	private $movementY;

	// food position in (x,y) format
	private $food = array();

	// snake chunks in (x, y) format
	private $snake = array();

	private $boardSize = array();

	private function draw()
	{
		// Clear all previously drawn stuff
		ncurses_wclear($this->window);

		// Get window dimensions
		ncurses_wrefresh($this->window);
		ncurses_getmaxyx($this->window, $winy, $winx);

		// Draw border
		ncurses_wborder($this->window, 0, 0, 0, 0, 0, 0, 0, 0);

		// If game has been ended, draw game over screen
		if($this->hasEnded)
		{
			$text = 'GAME OVER';

			ncurses_wmove($this->window, $winy/2, ($winx - strlen($text))/2);
			ncurses_waddstr($this->window, $text);

			ncurses_wrefresh($this->window);			

			return;
		}

		// Draw snake chunks as black squares
		ncurses_wattron($this->window, NCURSES_A_REVERSE);
		foreach($this->snake as $s)
		{
			ncurses_wmove($this->window, $s[1], $s[0]);
			ncurses_waddstr($this->window, ' ');
		}
		ncurses_wattroff($this->window, NCURSES_A_REVERSE);

		// Draw food
		if($this->food)
		{
			ncurses_wmove($this->window, $this->food[1], $this->food[0]);
			ncurses_waddstr($this->window, '*');
		}

		// Not all terminals can handle disabling the cursor
		// So we move the cursor to the corner to hide it
		ncurses_wmove($this->window, 0, 0);

		// Refresh
		ncurses_wrefresh($this->window);
	}

	private function handleKeys()
	{
		// Since ncurses_getch blocks the execution until the user presses any key
		// And we need to refresh the screen in between key presses
		// We need to use some other asynchronous method
		$file = fopen('php://stdin', 'r');
		stream_set_blocking($file, false);
		$key = fread($file, 1);

		// Get the last chunk of a snake
		if(count($this->snake) > 0)
			$head = $this->snake[ count($this->snake) - 1 ];

		$targetMovementX = 0;
		$targetMovementY = 0;

		// Game has ended and any key pressed - restart
		if($this->hasEnded && $key)
		{
			$this->restart();
			return;
		}

		// Movement keys
		if($key == 'w')
			$targetMovementY = -1;
		else if($key == 's')
			$targetMovementY = 1;
		else if($key == 'a')
			$targetMovementX = -1;
		else if($key == 'd')
			$targetMovementX = 1;

		// Calculate where the new head will be
		$targetPosition = array($head[0] + $targetMovementX, $head[1] + $targetMovementY);

		// Turn only when it's safe (there won't be a collision with a wall/snake)
		if(!$this->isBlocked($targetPosition))
		{
			$this->movementX = $targetMovementX;
			$this->movementY = $targetMovementY;
		}
	}

	private function isBlocked($position)
	{
		// Position is outside the map
		if($position[0] >= ($this->boardSize[0] - 1) || $position[0] <= 0)
			return true;
		if($position[1] >= ($this->boardSize[1] - 1) || $position[1] <= 0)
			return true;

		// There's a snake part on that position
		foreach($this->snake as $s)
		{
			if($s == $position)
				return true;
		}

		return false;
	}

	private function restart()
	{
		// Create the initial snake, make it move right
		$this->snake = array(
			array(5, 5),
			array(6, 5)
		);

		$this->movementX = 1;
		$this->movementY = 0;
		$this->hasEnded = false;
	
		$this->generateFood();
	}

	private function generateFood()
	{
		// Keep choosing a random position on the board until a free space is found
		// Remember that we have 1 pixel border around the board
		do
		{
			$this->food = array(
				rand(1, $this->boardSize[0] - 1),
				rand(1, $this->boardSize[1] - 1)
			);
		}
		while($this->isBlocked($this->food));
	}

	private function handleMovement()
	{
		// Get the last chunk of a snake
		if(count($this->snake) > 0)
			$head = $this->snake[ count($this->snake) - 1 ];

		// Calculate where the new head will be
		$newHead = array($head[0] + $this->movementX, $head[1] + $this->movementY);

		// If a player hits a wall or the snake - game over
		if($this->isBlocked($newHead))
		{
			$this->hasEnded = true;
			return;
		}

		// If a food has been hit - snake grows
		if($this->food == $newHead)
		{
			$this->generateFood();
		}
		else
		{
			// If not, remove the first element (oldest chunk) - snake does not grow
			array_shift($this->snake);
		}

		// Add new head to the snake
		$this->snake[] = $newHead;
	}

	public function run()
	{
		// Init ncurses, disable blinking cursor
		ncurses_init();
		ncurses_curs_set(0);

		// Create new full-screen window
		$this->window = ncurses_newwin(0, 0, 0, 0);

		// Get its dimensions
		ncurses_refresh();
		ncurses_getmaxyx(STDSCR, $this->boardSize[1], $this->boardSize[0]);

		// Start a new game
		$this->restart();

		while(true)
		{
			$this->handleKeys();

			if(!$this->hasEnded)
				$this->handleMovement();

			$this->draw();

			// Delay for 150ms
			usleep(150*1000);
		}

		ncurses_end();
	}
}

$snake = new Snake();
$snake->run();