<?php
namespace phprules;

/**
 * Represents an element of a Rule or RuleContext.
 *
 * @author Greg Swindle <greg@swindle.net>
 * @package phprules
 */
abstract class RuleElement {

    /**
     * The name of the RuleElement.
     *
     * @var string
     */
    private $name;


    /**
     * Create new element.
     *
     * @param string name The name.
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Get the name of this element.
     *
     * @return string The name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Returns the name of the RuleElement.
     *
     * @return string
     */
    public function __toString() {
        return $this->name;
    }

}