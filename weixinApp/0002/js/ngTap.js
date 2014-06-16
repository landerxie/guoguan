/**
 * Created by Lander-qi on 14-5-7.
 */
(function(angular) {
    'use strict';

    var directives = angular.module('app.directives', []);

    directives.directive('ngTap', function() {
        return function(scope, element, attrs) {
            var tapping;
            tapping = false;
            element.bind('touchstart', function(e) {
                element.addClass('active');
                tapping = true;
            });
            element.bind('touchmove', function(e) {
                element.removeClass('active');
                tapping = false;
            });
            element.bind('touchend', function(e) {
                element.removeClass('active');
                if (tapping) {
                    scope.$apply(attrs['ngTap'], element);
                }
            });
        };
    });
})(angular);