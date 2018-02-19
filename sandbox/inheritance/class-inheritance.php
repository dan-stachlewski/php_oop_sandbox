<?php

/**
 * INHERITANCE:
 * When NEW CLASS takes on the PROPERTIES & METHODS of an existing class
 * Why use in heritance?
 * - Organises your code
 * - Prevents repitition
 * - Simplifies maintenance
 * - Prevents inconsistencies & bugs
 *
 * CLASS INHERITANCE:
 * BEHAVIOURS (= PROPERTIES & METHODS) of a class are shared with SUBCLASSES
 * ADD NEW behaviours to parent class & all SUBCLASSES gain them
 * SUBCLASSES can OVERRIDE parent behaviour
 * SUBCLASSES can EXTEND oarent behaviour
 * parent class: Document
 * sub-classes: ProductBrochure & WarrantyDocument
 *
 * ALways declare Parent Class first.
 *
 */

class Parent{

}

class SubClass extends Parent{

}
