/**
 * Created by SamXiao on 2016/10/4.
 */
var BrightNestableList = {
    /**
     * nestable list 句柄，用于存储已初始化的 nestable list 实例
     */
    NestableListHandler: [],
    NestableListOptions: [],
    /**
     *
     * @param selector
     */
    initNestableList: function (selector) {
        if (!selector) {
            selector = '.dd';
        }
        var me = this;
        var handler = jQuery(selector).nestable(me.NestableListOptions);
        if (me.NestableListOptions.collapseAll == 1) {
            handler.nestable('collapseAll');
        }
        me.NestableListHandler[selector] = handler;
        me.bindEvents();
    },
    bindEvents: function () {
        var me = this;
        var handleSelector = '.dd-handle';

        $(document).on('click', handleSelector, function (e) {
            console.log(e);
            var item = this;
            me.toggleItem(item);
        })
    },
    expandItem: function (li, selector) {
        if (!selector) {
            selector = '.dd';
        }
        var me = this;
        var handler = me.NestableListHandler[selector];
        var itemSelector = '.' + me.NestableListOptions['itemClass'];
        handler.data("nestable").expandItem(li);
        if ($(li).parent().closest(itemSelector).length > 0) {
            console.log($(li).parent().closest(itemSelector));
            me.expandItem($(li).parent().closest(itemSelector));
        }
    },
    collapseItem: function (li) {
        jQuery(selector).nestable('collapseItem', li);
    },
    /**
     * 切换选中状态
     */
    toggleItem: function (handle) {
        var me = this;
        var itemSelector = '.' + me.NestableListOptions['itemClass'];
        var item = $(handle).closest(itemSelector);

        if ($(item).hasClass('dd-selected')) {
            $(item).removeClass('dd-selected');
            $(item).find(itemSelector).removeClass('dd-selected');
        } else {
            $(item).addClass('dd-selected');
            $(item).find(itemSelector).addClass('dd-selected');
        }


    }


};