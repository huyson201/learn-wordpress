<?php
 namespace MailPoetVendor\Doctrine\ORM\Mapping; if (!defined('ABSPATH')) exit; interface NamingStrategy { function classToTableName($className); function propertyToColumnName($propertyName, $className = null); function embeddedFieldToColumnName($propertyName, $embeddedColumnName, $className = null, $embeddedClassName = null); function referenceColumnName(); function joinColumnName($propertyName); function joinTableName($sourceEntity, $targetEntity, $propertyName = null); function joinKeyColumnName($entityName, $referencedColumnName = null); } 