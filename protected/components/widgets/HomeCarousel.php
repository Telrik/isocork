<?php
class HomeCarousel extends CWidget
{
    /**
     * Runs the widget.
     */
    public $limit = 32;

    public function run()
    {
        $rand = rand(0, 0);
        $items = $this->getItems($rand);

        $this->widget('application.components.widgets.LzCarousel', array(
            'items' => $items,
            'options' => array('interval' => 10000),
            //'captionOptions' => array('class' => 'container')
        ));
    }

    public function getItems($rand)
    {
        $items = array();
        switch ($rand) {
            case 0:
                $files = glob('web/images/carousel/*.jpg');
                shuffle($files);
                $files = array_slice($files, 0, $this->limit);

                foreach ($files as $file) $items[] = array('image' => $file, 'caption' => '111', 'label' => '222');
                break;
        }
        return $items;
    }
}