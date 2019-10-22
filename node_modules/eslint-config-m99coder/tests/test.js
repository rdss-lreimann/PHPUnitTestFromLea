'use strict';

var eslintConfig = require('../index');
var assert = require('../node_modules/chai/index').assert;

describe('eslint-config-m99coder', function() {

	describe('plugins', function() {

		it('should be an array', function() {
			assert.isArray(eslintConfig.plugins, 'plugins is no array');
		});

	});

	describe('rules', function() {

		it('should be an object', function() {
			assert.isObject(eslintConfig.rules, 'rules is no object');
		});

	});

});
