<?php

namespace Jul\LocationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jul_location');

        /**
         * The tree sets the default values for every field
         * I tried to build it using a foreach loop, and it doesn't work. Too bad
         */
        $rootNode
        	->children()
        		->arrayNode('inputFields')
        			->addDefaultsIfNotSet()
        			->children()
        				->arrayNode('location')
        					->addDefaultsIfNotSet()
        					->children()
        						->arrayNode('name')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('fullname')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
	        					->arrayNode('address')
		        					->addDefaultsIfNotSet()
		        					->children()
		        						->booleanNode('active')->defaultTrue()->end()
		        						->booleanNode('validation')->defaultFalse()->end()
			        					->scalarNode('type')->defaultNull()->end()
			        					->variableNode('options')->defaultValue(array())->end()
		        					->end()
	        					->end()
        					->end()
        					->children()
        						->arrayNode('fulladdress')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('postcode')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
	        					->arrayNode('latitude')
		        					->addDefaultsIfNotSet()
		        					->children()
		        						->booleanNode('active')->defaultTrue()->end()
		        						->booleanNode('validation')->defaultFalse()->end()
			        					->scalarNode('type')->defaultValue('hidden')->end()
			        					->variableNode('options')->defaultValue(array())->end()
		        					->end()
	        					->end()
        					->end()
        					->children()
	        					->arrayNode('longitude')
		        					->addDefaultsIfNotSet()
		        					->children()
		        						->booleanNode('active')->defaultTrue()->end()
		        						->booleanNode('validation')->defaultFalse()->end()
			        					->scalarNode('type')->defaultValue('hidden')->end()
			        					->variableNode('options')->defaultValue(array())->end()
		        					->end()
	        					->end()
        					->end()
        					->children()
        						->arrayNode('imagePath')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('website')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('phone')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        				->end()
        			->end()
        			->children()
        				->arrayNode('city')
        					->addDefaultsIfNotSet()
        					->children()
        						->arrayNode('name')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array( 'label' => 'City' ))->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('fullname')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('latitude')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('longitude')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        				->end()	
        			->end()
        			->children()
        				->arrayNode('state')
        					->addDefaultsIfNotSet()
        					->children()
        						->arrayNode('name')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array( 'label' => 'State' ))->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('fullname')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('shortname')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('latitude')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('longitude')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        				->end()
        			->end()
        			
        			->children()
        				->arrayNode('country')
        					->addDefaultsIfNotSet()
        					->children()
        						->arrayNode('name')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultTrue()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array( 'label' => 'Country' ))->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('shortname')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultNull()->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('latitude')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        					->children()
        						->arrayNode('longitude')
        							->addDefaultsIfNotSet()
        							->children()
        								->booleanNode('active')->defaultFalse()->end()
        								->booleanNode('validation')->defaultFalse()->end()
        								->scalarNode('type')->defaultValue('hidden')->end()
        								->variableNode('options')->defaultValue(array())->end()
        							->end()
        						->end()
        					->end()
        				->end()
        			->end()
        		->end()
        	->end()
        ->end()
        ;
        
        return $treeBuilder;
    }
}
