<?php

namespace mbzSubscriber;

class Field
{

    /**
     * @var int $idField
     */
    protected $idField = null;

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var int $fieldLength
     */
    protected $fieldLength = null;

    /**
     * @var FieldListTypeValue[] $valList
     */
    protected $valList = null;

    /**
     * @var int $idFieldType
     */
    protected $idFieldType = null;

    /**
     * @var string $fieldType
     */
    protected $fieldType = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isSystem
     */
    protected $isSystem = null;

    /**
     * @var boolean $isVisible
     */
    protected $isVisible = null;

    /**
     * @var boolean $isEditable
     */
    protected $isEditable = null;

    /**
     * @var boolean $isHiddenByClient
     */
    protected $isHiddenByClient = null;

    /**
     * @param int $idField
     * @param int $fieldLength
     * @param int $idFieldType
     * @param boolean $isSystem
     * @param boolean $isVisible
     * @param boolean $isEditable
     * @param boolean $isHiddenByClient
     */
    public function __construct($idField, $fieldLength, $idFieldType, $isSystem, $isVisible, $isEditable, $isHiddenByClient)
    {
      $this->idField = $idField;
      $this->fieldLength = $fieldLength;
      $this->idFieldType = $idFieldType;
      $this->isSystem = $isSystem;
      $this->isVisible = $isVisible;
      $this->isEditable = $isEditable;
      $this->isHiddenByClient = $isHiddenByClient;
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
     * @return \mbzSubscriber\Field
     */
    public function setIdField($idField)
    {
      $this->idField = $idField;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \mbzSubscriber\Field
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFieldLength()
    {
      return $this->fieldLength;
    }

    /**
     * @param int $fieldLength
     * @return \mbzSubscriber\Field
     */
    public function setFieldLength($fieldLength)
    {
      $this->fieldLength = $fieldLength;
      return $this;
    }

    /**
     * @return FieldListTypeValue[]
     */
    public function getValList()
    {
      return $this->valList;
    }

    /**
     * @param FieldListTypeValue[] $valList
     * @return \mbzSubscriber\Field
     */
    public function setValList(array $valList = null)
    {
      $this->valList = $valList;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdFieldType()
    {
      return $this->idFieldType;
    }

    /**
     * @param int $idFieldType
     * @return \mbzSubscriber\Field
     */
    public function setIdFieldType($idFieldType)
    {
      $this->idFieldType = $idFieldType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
      return $this->fieldType;
    }

    /**
     * @param string $fieldType
     * @return \mbzSubscriber\Field
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \mbzSubscriber\Field
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSystem()
    {
      return $this->isSystem;
    }

    /**
     * @param boolean $isSystem
     * @return \mbzSubscriber\Field
     */
    public function setIsSystem($isSystem)
    {
      $this->isSystem = $isSystem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVisible()
    {
      return $this->isVisible;
    }

    /**
     * @param boolean $isVisible
     * @return \mbzSubscriber\Field
     */
    public function setIsVisible($isVisible)
    {
      $this->isVisible = $isVisible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEditable()
    {
      return $this->isEditable;
    }

    /**
     * @param boolean $isEditable
     * @return \mbzSubscriber\Field
     */
    public function setIsEditable($isEditable)
    {
      $this->isEditable = $isEditable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHiddenByClient()
    {
      return $this->isHiddenByClient;
    }

    /**
     * @param boolean $isHiddenByClient
     * @return \mbzSubscriber\Field
     */
    public function setIsHiddenByClient($isHiddenByClient)
    {
      $this->isHiddenByClient = $isHiddenByClient;
      return $this;
    }

}
