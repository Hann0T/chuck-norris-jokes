<?php

namespace Hann0t\ChuckNorrisJokes\Tests;

use Hann0t\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {

        $chuckNorrisJokes = [
            'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
            'Time waits for no man. Unless that man is Chuck Norris.',
            'The chief export of Chuck Norris is pain.',
            'Chuck Norris can dribble a bowling ball.',
        ];
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
