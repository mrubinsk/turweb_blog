<?php
/**
 * Helper class for working with Horde-based news content via the api.
 */
class RubinskyWeb_News
{
    /**
     * Returns a block of html containing only story/news html for the
     * most recently posted article..no parent <div> tags
     * Currently, this is only used to grab the news content for the front page,
     * recent site news block.
     */
    public static function getLatestNews($feed, $count = 5, $stories = array())
    {
        if (count($stories) === 0) {
            $stories = self::getNewsStories($feed, $count, 0);
        }

        $html = '';
        if (is_array($stories)) {
            foreach ($stories as $story) {
                $html .= self::formatBlogEntry($story);
            }
            return $html;
        }
    }

    public static function formatBlogEntry($story)
    {
	$html = '<div class="post">';
        $html .= '<span class="date">' . date('F j, Y', $story['published']) . '</span>';
        $html .= '<h2><a href="' .  htmlspecialchars($story['link']) . '">' . $story['title'] . '</a></h2>'. "\n";
        $html .= '<p>' . $story['body_html'] . '</p>' . "\n";
        $html .= '<div class="articleLink">';
        if (count($story['tags'])) {
            $html .= '<div  class="post_tags">Tagged with: ' . implode(', ', $story['tags']) . '</div>';
        }
        $html .= '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $story['id'] . '" data-text="' . $story['title'] . '" data-via="mrubinsk">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    /**
     * Get a list of news articles by tag.
     *
     */
    public static function getNewsByTag($feed, $tag, $count = 20)
    {
        return $GLOBALS['injector']->getInstance('Horde_Registry')->news->searchTags(
            array($tag),
            array('max' => $count,
                  'from' => 0,
                  'channel_id' => array($feed),
                  'order' => 0),
            true);
    }

    /**
     * Retrieve an array of story data from the horde server
     */
    public static function getNewsStories($feed, $max = 10, $start = 0)
    {
        return $GLOBALS['injector']
            ->getInstance('Horde_Registry')
            ->news
            ->stories($feed, array('max_stories' => $max, 'start_at' => $start));
    }

}