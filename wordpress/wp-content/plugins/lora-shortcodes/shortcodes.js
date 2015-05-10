(function() {
"use strict";

    tinymce.create('tinymce.plugins.shortcodes', {

        init : function(ed, url) {

            ed.addButton( 'shortcodes', {
                type: 'listbox',
                text: 'Shortcodes\u00A0\u00A0\u00A0\u00A0\u00A0',
                icon: false,
                onselect: function(e) {
                }, 
                values: [

                    {text: 'View Docs', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        window.open("admin.php?page=lora");

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Row', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[row]' + selected + '[/row]';
                        } else {
                            content = '[row][/row]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Columns', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[one-half first="yes"]' + selected + '[/one-half]';
                        } else {
                            content = '[one-half first="yes"][/one-half]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Portfolio', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        content = '[portfolio]';
                        
                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Button', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[button link="#"]' + selected + '[/button]';
                        } else {
                            content = '[button link="#"][/button]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Font Awesome', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        content = '[fa icon=""][/fa]';
                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Lightbox Image', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[lightbox url="http://full-image-url.com"]' + selected + '[/lightbox]';
                        } else {
                            content = '[lightbox url="http://full-image-url.com"]http://small-image-url.com[/lightbox]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Lightbox Gallery', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[lb_gallery]' + selected + '[/lb_gallery]';
                        } else {
                            content = '[lb_gallery]<br />' + 
                            '[lb_image url="http://full-image-url.com"]http://small-image-url.com[/lb_image]<br />' +
                            '[lb_image url="http://full-image-url.com"]http://small-image-url.com[/lb_image]<br />' +
                            '[/lb_gallery]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Accordion', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[accordion][section title=""]' + selected + '[/section][/accordion]';
                        } else {
                            content = '[accordion]<br />' + 
                            '[section title="Section Title"]Section content.[/section]<br />' +
                            '[section title="Section Title"]Section content.[/section]<br />' +
                            '[/accordion]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Toggle', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[toggle id="unique-id" title="Toggle Title"]' + selected + '[/toggle]';
                        } else {
                            content = '[toggle id="unique-id" title="Toggle Title"]<br />' + 
                            'Toggle content.<br />' +
                            '[/toggle]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Tabs', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        content = '<div id="tabs">' +
                        '<ul><li><i class="fa fa-paint-brush"></i> <a href="#tabs-1">Tab 1</a></li>' + 
                        '<li><a href="#tabs-2">Tab 2</a></li>' + 
                        '</ul><br />' +
                        '<div id="tabs-1">Tab 1 content.</div><br />' +
                        '<div id="tabs-2">Tab 2 content.</div><br />' +
                        '</div>';

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Alert', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[alert type="note"]' + selected + '[/alert]';
                        } else {
                            content = '[alert type="note"]Alert message[/alert]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Call To Action', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[cta heading="' + selected + '" subtext="" actiontext="Buy Now" link="#"]';
                        } else {
                            content = '[cta heading="Call to action text." subtext="Call to action sub text." actiontext="Buy Now" link="#"]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'Lead Text', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[lead dropcap="yes"]' + selected + '[/lead]';
                        } else {
                            content = '[lead dropcap="yes"]Lorem ipsum dolor sit amet[/lead]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    {text: 'List', onclick : function() {
                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();

                        if ( selected ) {
                            content = '[list]<br />' +
                            '[li]' + selected + '[/li]<br />' +
                            '[li]' + selected + '[/li]<br />' +
                            '[/list]';
                        } else {
                            content = '[list]<br />' +
                            '[li]List item 1.[/li]<br />' +
                            '[li]List item 2.[/li]<br />' +
                            '[/list]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},

                    /*{text: 'H2 Title', onclick : function() {

                        var selected = false;
                        var content = selected = tinyMCE.activeEditor.selection.getContent();
                        var h2titleclass = prompt("Would you like a custom class?", "");

                        if(h2titleclass != ''){
                            h2titleclass = ' class= "'+h2titleclass+'"';
                        }

                        if (selected !== '') {
                            content = '[h2'+h2titleclass+']' + selected + '[/h2]';
                        } else {
                            content = '[h2'+h2titleclass+'][/h2]';
                        }

                        tinymce.execCommand('mceInsertContent', false, content);
                    }},*/

                ]
            });     
        },
    });

tinymce.PluginManager.add('shortcodes', tinymce.plugins.shortcodes);
})();