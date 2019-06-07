
/**
 * Class MemeCollection
 * @package MemeCollection
 */
class MemeCollection
{
    /**
     * Get all the funnies Memes
     *
     * @return array
     */
    public static function getFunnies()
    {
        return [];
    }
}

/**
 * Class Meme
 * @package Meme
 */
class Meme
{
    /**
     * Like the Meme
     */
    public function like()
    {

    }
}

/**
 * Class MemeLikes
 *
 * @package MemeLikes
 */
class MemeLikes
{
    /**
     * Like All the Memes
     */
    public function likeMemes()
    {
        // Retrieves Meme instances collection
        $memes = MemeCollection::getFunnies();

        // Like every Meme
        foreach ($memes as $meme) {

            // Confirm the meme is funny. If so, Like the meme :D
            if ($meme->status === 'funny') {
                $meme->like();
            }

        }
    }
}
