<?php

/**
 * Hoa Framework
 *
 *
 * @license
 *
 * GNU General Public License
 *
 * This file is part of Hoa Open Accessibility.
 * Copyright (c) 2007, 2010 Ivan ENDERLIN. All rights reserved.
 *
 * HOA Open Accessibility is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * HOA Open Accessibility is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with HOA Open Accessibility; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *
 * @category    Framework
 * @package     Hoa_Graph
 * @subpackage  Hoa_Graph_Node_SimpleNode
 *
 */

/**
 * Hoa_Framework
 */
require_once 'Framework.php';

/**
 * Hoa_Graph_Node_Interface
 */
import('Graph.Node.Interface');

/**
 * Class Hoa_Graph_Node_SimpleNode.
 *
 * It's just a simple node demo (may be used for example and test).
 *
 * @author      Ivan ENDERLIN <ivan.enderlin@hoa-project.net>
 * @copyright   Copyright (c) 2007, 2010 Ivan ENDERLIN.
 * @license     http://gnu.org/licenses/gpl.txt GNU GPL
 * @since       PHP 5
 * @version     0.1
 * @package     Hoa_Graph
 * @subpackage  Hoa_Graph_Node_SimpleNode
 */

class Hoa_Graph_Node_SimpleNode implements Hoa_Graph_Node_Interface {

    /**
     * Node ID.
     *
     * @var Hoa_Graph_Node_SimpleNode string
     */
    protected $nodeId = null;

    /**
     * Node value.
     *
     * @var Hoa_Graph_Node_SimpleNode string
     */
    protected $nodeValue = null;



    /**
     * Build a node that contains a string.
     *
     * @access  public
     * @param   string  $nodeId       The node ID.
     * @param   string  $nodeValue    The node value.
     * @return  void
     */
    public function __construct ( $nodeId, $nodeValue = null ) {

        $this->setNodeId($nodeId);
        $this->setNodeValue($nodeValue);
    }

    /**
     * Set node ID.
     *
     * @access  protected
     * @param   string     $nodeId    The node ID.
     * @return  string
     */
    protected function setNodeId ( $nodeId ) {

        $old          = $this->nodeId;
        $this->nodeId = $nodeId;

        return $old;
    }

    /**
     * Set node value.
     *
     * @access  public
     * @param   string  $nodeValue    The node value.
     * @return  string
     */
    public function setNodeValue ( $nodeValue = null ) {

        $old             = $this->nodeValue;
        $this->nodeValue = $nodeValue;

        return $old;
    }

    /**
     * Get node ID, must be implement because of interface.
     *
     * @access  public
     * @return  string
     */
    public function getNodeId ( ) {

        return $this->nodeId;
    }

    /**
     * Get node value.
     *
     * @access  public
     * @return  string
     */
    public function getNodeValue ( ) {

        return $this->nodeValue;
    }
}
