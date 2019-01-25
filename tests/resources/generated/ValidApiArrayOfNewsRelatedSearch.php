<?php

namespace Api\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNewsRelatedSearch ArrayType
 * @package Api
 * @subpackage Arrays
 * @release 1.1.0
 */
class ApiArrayOfNewsRelatedSearch extends AbstractStructArrayBase
{
    /**
     * The NewsRelatedSearch
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Api\StructType\ApiNewsRelatedSearch[]
     */
    public $NewsRelatedSearch;
    /**
     * Constructor method for ArrayOfNewsRelatedSearch
     * @uses ApiArrayOfNewsRelatedSearch::setNewsRelatedSearch()
     * @param \Api\StructType\ApiNewsRelatedSearch[] $newsRelatedSearch
     */
    public function __construct(array $newsRelatedSearch = array())
    {
        $this
            ->setNewsRelatedSearch($newsRelatedSearch);
    }
    /**
     * Get NewsRelatedSearch value
     * @return \Api\StructType\ApiNewsRelatedSearch[]|null
     */
    public function getNewsRelatedSearch()
    {
        return $this->NewsRelatedSearch;
    }
    /**
     * This method is responsible for validating the values passed to the setNewsRelatedSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewsRelatedSearch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNewsRelatedSearchForArrayContraintsFromSetNewsRelatedSearch(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNewsRelatedSearchNewsRelatedSearchItem) {
            // validation for constraint: itemType
            if (!$arrayOfNewsRelatedSearchNewsRelatedSearchItem instanceof \Api\StructType\ApiNewsRelatedSearch) {
                $invalidValues[] = is_object($arrayOfNewsRelatedSearchNewsRelatedSearchItem) ? get_class($arrayOfNewsRelatedSearchNewsRelatedSearchItem) : var_export($arrayOfNewsRelatedSearchNewsRelatedSearchItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NewsRelatedSearch property can only contain items of \Api\StructType\ApiNewsRelatedSearch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NewsRelatedSearch value
     * @throws \InvalidArgumentException
     * @param \Api\StructType\ApiNewsRelatedSearch[] $newsRelatedSearch
     * @return \Api\ArrayType\ApiArrayOfNewsRelatedSearch
     */
    public function setNewsRelatedSearch(array $newsRelatedSearch = array())
    {
        // validation for constraint: array
        if ('' !== ($message = self::validateNewsRelatedSearchForArrayContraintsFromSetNewsRelatedSearch($newsRelatedSearch))) {
            throw new \InvalidArgumentException($message, __LINE__);
        }
        $this->NewsRelatedSearch = $newsRelatedSearch;
        return $this;
    }
    /**
     * Add item to NewsRelatedSearch value
     * @throws \InvalidArgumentException
     * @param \Api\StructType\ApiNewsRelatedSearch $item
     * @return \Api\ArrayType\ApiArrayOfNewsRelatedSearch
     */
    public function addToNewsRelatedSearch(\Api\StructType\ApiNewsRelatedSearch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Api\StructType\ApiNewsRelatedSearch) {
            throw new \InvalidArgumentException(sprintf('The NewsRelatedSearch property can only contain items of \Api\StructType\ApiNewsRelatedSearch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NewsRelatedSearch[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Api\StructType\ApiNewsRelatedSearch|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Api\StructType\ApiNewsRelatedSearch|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Api\StructType\ApiNewsRelatedSearch|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Api\StructType\ApiNewsRelatedSearch|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Api\StructType\ApiNewsRelatedSearch|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NewsRelatedSearch
     */
    public function getAttributeName()
    {
        return 'NewsRelatedSearch';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Api\ArrayType\ApiArrayOfNewsRelatedSearch
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
