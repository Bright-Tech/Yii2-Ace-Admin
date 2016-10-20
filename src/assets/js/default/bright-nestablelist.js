/**
 * Created by SamXiao on 2016/10/4.
 */
var BrightNestableList = {
    nestableListHandler: [],
    NestableListOptions: [],
    initNestableList: function (selector) {
        if (!selector) {
            selector = '.dd';
        }
        var me = this;
        var handler = jQuery(selector).nestable(me.NestableListOptions);
        if (me.NestableListOptions.collapseAll == 1) {
            handler.nestable('collapseAll');
        }
        me.nestableListHandler[selector] = handler;
    },
    expandItem: function (li, selector) {
        if (!selector) {
            selector = '.dd';
        }
        var me = this;
        var handler = me.nestableListHandler[selector];
        handler.data("nestable").expandItem(li);
        if($(li).parent().closest('.dd-item').length > 0) {
            console.log($(li).parent().closest('.dd-item'));
            me.expandItem($(li).parent().closest('.dd-item'));
        }
    },
    collapseItem: function (li) {
        jQuery(selector).nestable('collapseItem', li);
    },

};