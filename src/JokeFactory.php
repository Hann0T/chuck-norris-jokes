<?php

namespace Hann0t\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
        'Time waits for no man. Unless that man is Chuck Norris.',
        'The chief export of Chuck Norris is pain.',
        'Chuck Norris can dribble a bowling ball.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
