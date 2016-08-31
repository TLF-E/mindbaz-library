<?php

namespace mbzTarget;

class FieldFilter
{

    /**
     * @var int $idField
     */
    protected $idField = null;

    /**
     * @var EOperator $fieldOperator
     */
    protected $fieldOperator = null;

    /**
     * @var string $fieldValue
     */
    protected $fieldValue = null;

    /**
     * @param int $idField
     * @param EOperator $fieldOperator
     */
    public function __construct($idField, $fieldOperator)
    {
      $this->idField = $idField;
      $this->fieldOperator = $fieldOperator;
    }

    /**
     * @return int
     */
    public function getIdField()
    {
      return $this->idField;
    }

    /**
     * @param int $idField
     * @return \mbzTarget\FieldFilter
     */
    public function setIdField($idField)
    {
      $this->idField = $idField;
      return $this;
    }

    /**
     * @return EOperator
     */
    public function getFieldOperator()
    {
      return $this->fieldOperator;
    }

    /**
     * @param EOperator $fieldOperator
     * @return \mbzTarget\FieldFilter
     */
    public function setFieldOperator($fieldOperator)
    {
      $this->fieldOperator = $fieldOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldValue()
    {
      return $this->fieldValue;
    }

    /**
     * @param string $fieldValue
     * @return \mbzTarget\FieldFilter
     */
    public function setFieldValue($fieldValue)
    {
      $this->fieldValue = $fieldValue;
      return $this;
    }

}
