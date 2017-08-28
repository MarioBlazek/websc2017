<?php

namespace EzSolrWorkshopBundle\Core\Persistence;

use eZ\Publish\Core\Persistence\FieldType as CorePersistenceFieldType;
use eZ\Publish\SPI\Persistence\Content\FieldValue;

class FieldType extends CorePersistenceFieldType
{
    /**
     * @param \eZ\Publish\SPI\Persistence\Content\FieldValue $fieldValue
     *
     * @return bool
     */
    public function isEmptyValue(FieldValue $fieldValue)
    {
        return $this->internalFieldType->isEmptyValue(
            $this->internalFieldType->fromPersistenceValue($fieldValue)
        );
    }
}