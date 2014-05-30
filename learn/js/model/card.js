/**
 * Created by Administrator on 14-5-30.
 */
(function(){
    'use strict';

    function Card(){

    }
    Card.prototype = {

    };

    function exports(){
        return new Card();
    }

    exports.Card = Card;

    window.card = exports;
})();
