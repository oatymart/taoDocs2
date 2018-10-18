define([
    'jquery',
    'ui/switch2/switch2'
], function($, switch2Plugin){
    'use strict';

    var fixture = $('#qunit-fixture');

    QUnit.module('switch2Plugin');

    QUnit.test('module', function(assert){
        QUnit.expect(1);    // expect 1 assertion

        assert.ok(typeof switch2Plugin === 'function', 'The module exposes a function');
    });

    QUnit.test('instantiation', function(assert){
        QUnit.expect(1);

        var s2 = switch2Plugin();   // use "new" keyword?
        console.log('s2p', s2);
        assert.equal(s2.getState(), true, 'The initial state is on');
    });

    QUnit.test('flipping', function(assert){
        QUnit.expect(2);

        fixture.append( "<div>hello!</div>" );

        var s2 = switch2Plugin();
        s2.flip();
        assert.equal(s2.getState(), false, 'The flipped state is off');
        s2.flip();
        assert.equal(s2.getState(), true, 'The re-flipped state is on');
    });


});