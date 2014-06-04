/**
 * Created by Administrator on 14-5-30.
 */
(function(){
    'use strict';

    function Card(){
        this.isFaceUp = false;
        this.isUnplayable = false;
    }
    Card.prototype = {

        contents: function(v){
            if (v === undefined){
                return this._contents;
            } else{
                return this._contents = v;
            }
        }
    };

    function exports(){
        return new Card();
    }

    exports.Card = Card;

    window.card = exports;
})();
