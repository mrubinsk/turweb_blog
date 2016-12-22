    <?php
/**
 * Main controller class
 *
 * Handles requests to the main home page.
 *
 * @copyright 2010 Michael J Rubinsky <mrubinsk@horde.org>
 * @license  http://opensource.org/licenses/bsd-license.php BSD
 * @author Michael J Rubinsky <mrubinsk@horde.org>
 */
class TUR_Me_Controller extends RubinskyWeb_Controller_Base
{
    public function processRequest(Horde_Controller_Request $request, Horde_Controller_Response $response)
    {
        $this->_mapper = $GLOBALS['injector']->getInstance('Horde_Routes_Mapper');
        $this->_matchDict = new Horde_Support_Array($this->_mapper->match($request->getPath()));
        $this->_setup();
        $this->_do($response);
    }

    /**
     *
     */
    protected function _setup()
    {
        parent::_setup();
        $view = $this->getView();
        $view->addTemplatePath(
            array(
                $GLOBALS['fs_base'] . '/app/views/Home',
                $GLOBALS['fs_base'] . '/app/views/shared'
            )
        );
    }

    protected function _do (Horde_Controller_Response $response)
    {
        $view = $this->getView();
        $view->page_title = 'theUpstairsRoom::Me';
        $layout = $this->getInjector()->getInstance('Horde_Core_Ui_Layout');
        $layout->setView($view);
        $layout->setLayoutName('page');
        $response->setBody($layout->render('index'));
    }

    /**
     * init the controller
     *
     */
    protected function _initializeApplication()
    {
        // Load Helpers
        $this->_view->addHelper('Tag');
        $this->_view->addHelper('Text');
        $this->_view->addHelper('Capture');
        $this->setLayout('main');

         // This one is used alot...
        $this->homeurl = $this->urlWriter->urlFor('home');

        // Slight hack, but this makes it easier for me to move things from
        // dev to production etc...
        $this->host_base = $GLOBALS['host_base'];

        // ...and for the rest...
        $this->urlWriter = $this->getUrlWriter();
        $this->metatags = ''; // TODO

        /* Basic page info */
        $this->page_title = $this->site_name = $GLOBALS['site_name'];
    }

}
