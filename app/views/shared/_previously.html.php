<div id="previously">
  <h3>Previously</h3>
  <?php echo $this->renderPartial(
        'news',
        array(
            'locals' => array(
                'page' => $this->page,
                'pageCount' => $this->pageCount,
                'summary' => $this->summary
            )
        )
    );
?>
</div>
