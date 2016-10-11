/**
 * Created by SamXiao on 2016/10/4.
 */
var BrightNestableList = {
    NestableListOptions: [],
    initNestableList: function () {
        var me = this;
        jQuery('.dd').nestable(me.NestableListOptions);
    }
};