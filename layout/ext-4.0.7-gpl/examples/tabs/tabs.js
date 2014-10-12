/*

This file is part of Ext JS 4

Copyright (c) 2011 Sencha Inc

Contact:  http://www.sencha.com/contact

GNU General Public License Usage
This file may be used under the terms of the GNU General Public License version 3.0 as published by the Free Software Foundation and appearing in the file LICENSE included in the packaging of this file.  Please review the following information to ensure the GNU General Public License version 3.0 requirements will be met: http://www.gnu.org/copyleft/gpl.html.

If you are unsure which license is appropriate for your use, please contact the sales department at http://www.sencha.com/contact.

*/
Ext.require('Ext.tab.*');

Ext.onReady(function(){
    // basic tabs 1, built from existing content
    var tabs = Ext.createWidget('tabpanel', {
        renderTo: 'tabs1',
        width: 650,
        autoheight: true,
        activeTab: 0,
        defaults :{
            bodyPadding: 10
        },
        items: [{
            contentEl:'viewall', 
            title: 'View All',
            closable: false
        },{
            contentEl:'addcontact', 
            title: 'Add Contact'
        }]
    });
    
});
