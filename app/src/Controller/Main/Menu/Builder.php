<?php

namespace Internship\Controller\Main\Menu;

use Knp\Menu\MenuFactory;

class Builder
{
    /**
     * @param MenuFactory $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface|\Knp\Menu\MenuItem
     */
    public function mainMenu(MenuFactory $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', ['route' => 'homepage']);
        $menu->addChild('Offer', ['route' => 'offer']);
        $menu->addChild('Manage Cars', ['route' => 'car_index']);
        return $menu;
    }
}
