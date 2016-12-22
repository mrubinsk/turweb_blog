<?php
if ($this->page + 2 <= $this->pageCount) {
    echo $this->contentTag(
        'a',
        $this->escape('<< Older'),
        array(
          'href' => '#',
          'id' => 'olderLink',
          'onClick' => 'return updatePreviously(' . ((int)$this->page + 1) . ');'
        )
    );
}

if ($this->page > 0) {
    echo $this->contentTag(
        'a',
        $this->escape('Newer >>'),
        array(
          'href' => '#',
          'id' => 'newerLink',
          'onClick' => 'return updatePreviously(' . ((int)$this->page - 1) . ');'
        )
    );
}
foreach ($this->summary as $story) {
    echo '<div class="item">' . $this->contentTag(
          'a',
          $story['title'],
          array(
            'href' => $story['link'],
            'class' => 'rfNewsHeader'
          )
      )  . ((!$this->summaryTitlesOnly) ? $this->contentTag('div', $story['description'], array('class' => 'rfNewsHeader')) : '') . '</div>';
}

