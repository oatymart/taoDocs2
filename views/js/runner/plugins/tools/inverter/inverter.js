define([
    'taoTests/runner/plugin'
], function (pluginFactory){
    'use strict';

    return pluginFactory({

        name: 'inverter',

        init : function init(){
            var areaBroker = this.getAreaBroker();
            this.button = areaBroker.getToolbox().createEntry({
                control : 'inverter',
                text : 'Invert',
                title : 'Invert colors',
                icon : 'eye-slash'
            });
            this.button.on('click', function (e){
                e.preventDefault();
                areaBroker.getContentArea().toggle();
            });
        },

        render : function render(){
        },

        destroy : function destroy(){
        },

        enable : function enable(){
        },

        disable : function disable(){
        },

        show : function show(){
        },

        hide : function hide(){
        }
    });
});