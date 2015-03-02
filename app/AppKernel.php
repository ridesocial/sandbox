<?php
use RideSocial\Bundle\CoreBundle\Kernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = array(
            // Put your own bundles here.,
        );

        return array_merge($bundles, parent::registerBundles());
    }
}
