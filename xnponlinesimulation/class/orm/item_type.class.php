<?php

//  $Id:$
//  ------------------------------------------------------------------------ //
//  XooNIps Online Simulator Item Type Module                                //
//                                                                           //
//  Copyright (C) 2011 RIKEN BSI Neuroinformatics Japan Center               //
//  All rights reserved.                                                     //
//  http://sim.neuroinf.jp/                                                  //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

require_once XOOPS_ROOT_PATH.'/modules/xoonips/class/orm/item_type.class.php';

/**
 * @brief Data object of Online Simulation detail information
 */
class XNPOnlinesimulationOrmItemType extends XooNIpsOrmItemType
{
    /**
     * constructor.
     */
    public function __construct()
    {
        parent::__construct('xnponlinesimulation');
    }
}

/**
 * @brief handler of item type
 */
class XNPOnlinesimulationOrmItemTypeHandler extends XooNIpsOrmItemTypeHandler
{
    /**
     * constructor.
     *
     * @param object &$db xoops db instance
     */
    public function __construct(&$db)
    {
        parent::__construct($db);
        $this->__initHandler('XNPOnlinesimulationOrmItemType', 'xoonips_item_type', 'item_type_id', false);
    }
}
