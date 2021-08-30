<?php
declare(strict_types=1);

/**
 * Block for Locations page
 *
 * @author Nadeem Khan <khannadeem243@gmail.com>
 *
 */
namespace Magelumen\ShippingTimer\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}

