(function () {
	tinymce.create('tinymce.plugins.Shortcodes', {
		init         : function (ed, url) {

			ed.addButton('shortcodes', {
				text : 'Shortcodes',
				title: 'Short codes',
				type : 'menubutton',
				menu : [
					{
						text: 'Custom lists',
						menu: [
							{text      : 'Default',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'default');
								}
							},
							{text      : 'Check',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'check');
								}
							},
							{text      : 'Check Circle',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'check circle');
								}
							},
							{text      : 'Angle',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'angle');
								}
							},
							{text      : 'Angle Circle',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'angle circle');
								}
							},
							{text      : 'Asterisk',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'asterisk');
								}
							},
							{text      : 'Asterisk Circle',
								onclick: function () {
									ed.execCommand('InsertUnorderedList', 0);
									ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'asterisk circle');
								}
							}
						]
					},
					{
						text: 'Buttons',
						menu: [
							{
								text: 'Small',
								menu: [
									{
										text: 'Default',
										menu: [
											{text      : 'Default',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Danger',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-danger btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Warning',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-warning btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Success',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-success btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Info',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-info btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Awesome',
										menu: [
											{text      : 'Edit',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-sm"><i class="fa fa-pencil"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Featured',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-sm"><i class="fa fa-heart"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Liked',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-sm"><i class="fa fa-thumbs-o-up"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Leaf',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-sm"><i class="fa fa-pagelines"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Check',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-sm"><i class="fa fa-check"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Smile',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-success awesome btn-sm"><i class="fa fa-smile-o"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Socials',
										menu: [
											{text      : 'Facebook',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-facebook-square"></i><b>Facebook</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Twitter',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-twitter-square"></i><b>Twitter</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Linkedin',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-linkedin-square"></i><b>Linkedin</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Instagram',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-instagram"></i><b>Instagram</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Google+',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-google-plus-square"></i><b>Google+</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Vimeo',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-vimeo-square"></i><b>Vimeo</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Pinterest',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-pinterest-square"></i><b>Pinterest</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Dribbble',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-dribbble"></i><b>Dribbble</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Rss',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-rss-square"></i><b>Rss</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Youtube',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-youtube-square"></i><b>Youtube</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Dropbox',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button mini"><i class="fa fa-dropbox"></i><b>Dropbox</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Default',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 0PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-0 btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Gold',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 gold btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 gold btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 gold btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 gold btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Green',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 green btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 green btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 green btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 green btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Red',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 red btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 red btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 red btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 red btn-sm">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									}
								]
							},
							{
								text: 'Medium',
								menu: [
									{
										text: 'Default',
										menu: [
											{text      : 'Default',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Danger',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-danger">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Warning',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-warning">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Success',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-success">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Info',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-info">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Awesome',
										menu: [
											{text      : 'Edit',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome"><i class="fa fa-pencil"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Featured',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome"><i class="fa fa-heart"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Liked',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome"><i class="fa fa-thumbs-o-up"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Leaf',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome"><i class="fa fa-pagelines"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Check',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome"><i class="fa fa-check"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Smile',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-success awesome"><i class="fa fa-smile-o"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Socials',
										menu: [
											{text      : 'Facebook',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button facebook"><i class="fa fa-facebook"></i><b>Facebook</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Twitter',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button twitter"><i class="fa fa-twitter"></i><b>Twitter</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Linkedin',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button linkedin"><i class="fa fa-linkedin"></i><b>Linkedin</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Instagram',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button instagram"><i class="fa fa-instagram"></i><b>Instagram</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Google+',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button google"><i class="fa fa-google-plus"></i><b>Google+</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Vimeo',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button vimeo"><b>Vimeo</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Pinterest',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button pinterest"><i class="fa fa-pinterest"></i><b>Pinterest</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Dribbble',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button dribbble"><i class="fa fa-dribbble"></i><b>Dribbble</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Skype',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button skype"><i class="fa fa-skype"></i><b>Skype</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Rss',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button rss"><i class="fa fa-rss"></i><b>Rss</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Youtube',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="social_button youtube"><i class="fa fa-youtube"></i><b>Youtube</b></a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Default',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 0PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-0">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Gold',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 gold">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 gold">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 gold">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 gold">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Green',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 green">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 green">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 green">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 green">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Red',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 red">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 red">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 red">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 red">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									}
								]
							},
							{
								text: 'Large',
								menu: [
									{
										text: 'Default',
										menu: [
											{text      : 'Default',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Danger',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-danger btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Warning',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-warning btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Success',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-success btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Info',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-info btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Awesome',
										menu: [
											{text      : 'Edit',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-lg"><i class="fa fa-pencil"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Featured',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-lg"><i class="fa fa-heart"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Liked',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-lg"><i class="fa fa-thumbs-o-up"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Leaf',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-lg"><i class="fa fa-pagelines"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Check',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-primary awesome btn-lg"><i class="fa fa-check"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Smile',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-success awesome btn-lg"><i class="fa fa-smile-o"></i>Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Default',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 0PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-0 btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Gold',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 gold btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 gold btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 gold btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 gold btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Green',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 green btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 green btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 green btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 green btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									},
									{
										text: 'Bordered Red',
										menu: [
											{text      : 'Bordered 4PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-4 red btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 3PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-3 red btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 2PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-2 red btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											},
											{text      : 'Bordered 1PX',
												onclick: function () {
													var return_text = '';
													return_text = '<a href="#" class="btn btn-bordered-1 red btn-lg">Button</a>';
													ed.execCommand('mceReplaceContent', false, return_text);
												}
											}
										]
									}
								]
							}
						]
					},
					{
						text   : 'Custom quote',
						onclick: function () {
							var selected_text = ed.selection.getContent();
							var return_text = '';
							return_text = '<blockquote class="quote">' + selected_text + '</blockquote>';
							ed.execCommand('mceInsertContent', 0, return_text);
						}
					},
					{
						text   : 'Note',
						onclick: function () {
							var selected_text = ed.selection.getContent();
							if (selected_text == '') selected_text = 'Note content';
							var return_text = '';
							return_text = '<div class="shortcode_note highlight">' + selected_text + '</div>';
							ed.execCommand('mceInsertContent', 0, return_text);
						}
					},
					{
						text: 'Messages',
						menu: [
							{text: 'Info', onclick: function () {
								ed.execCommand('putMessage', 'alert-info');
							}},
							{text: 'Danger', onclick: function () {
								ed.execCommand('putMessage', 'alert-danger');
							}},
							{text: 'Warning', onclick: function () {
								ed.execCommand('putMessage', 'alert-warning');
							}},
							{text: 'Success', onclick: function () {
								ed.execCommand('putMessage', 'alert-success');
							}}
						]
					},
					{
						text: 'Progress',
						menu: [
							{text: 'Type1', onclick: function () {
								var return_text = '[progress embedded=true]<br />' +
									'[bar title="Progress title" percentage="75"]<br />' +
									'[bar title="Progress title" percentage="55"]<br />' +
									'[bar title="Progress title" percentage="35"]<br />' +
									'[/progress]<br />';
								ed.execCommand('mceInsertContent', 0, return_text);
							}},
							{text: 'Type2', onclick: function () {
								var return_text = '[progress]<br />' +
									'[bar title="Progress title" percentage="75"]<br />' +
									'[bar title="Progress title" percentage="55"]<br />' +
									'[bar title="Progress title" percentage="35"]<br />' +
									'[/progress]<br />';
								ed.execCommand('mceInsertContent', 0, return_text);
							}}

						]
					},
					{
						text: 'Others',
						menu: [
							{text: 'Accordions', onclick: function () {

								var return_text = '[accordion]<br />' +
									'[toggle title="Section One" open="yes"]Accordion content goes here[/toggle]<br />' +

									'[toggle title="Section Two" open="no"]Accordion content goes here[/toggle]<br />' +

									'[toggle title="Section Three" open="no"]Accordion content goes here[/toggle]<br />' +

									'[/accordion]<br />';
								ed.execCommand('mceInsertContent', 0, return_text);

							}},
							{text: 'Toggles', onclick: function () {
								var return_text = '[toggles]<br />' +
									'[toggle title="Section One" open="yes"]Accordion content goes here[/toggle]<br />' +

									'[toggle title="Section Two" open="no"]Accordion content goes here[/toggle]<br />' +

									'[toggle title="Section Three" open="no"]Accordion content goes here[/toggle]<br />' +

									'[/toggles]<br />';
								ed.execCommand('mceInsertContent', 0, return_text);

							}},
							{text: 'Tabs', onclick: function () {
								var return_text = '[tabs]<br />' +
									'[tab title="Tab One" open="yes"]Tab content goes here[/tab]<br />' +

									'[tab title="Tab Two" open="no"]Tab content goes here[/tab]<br />' +

									'[tab title="Tab Three" open="no"]Tab content goes here[/tab]<br />' +

									'[/tabs]<br />';
								ed.execCommand('mceInsertContent', 0, return_text);


							}},
							{text: 'Tabs with icon', onclick: function () {
								var return_text = '[tabs]<br />' +
									'[tab title="Tab One" icon="print" open="yes"]Tab content goes here[/tab]<br />' +

									'[tab title="Tab Two" icon="download" open="no"]Tab content goes here[/tab]<br />' +

									'[tab title="Tab Three" icon="users" open="no"]Tab content goes here[/tab]<br />' +

									'[/tabs]<br />';
								ed.execCommand('mceInsertContent', 0, return_text);


							}},
						]
					},
					{
						text: 'Columns',
						menu: [
							{text: '1/2', onclick: function () {
								ed.execCommand('putColumns', 'one_half');
							}},
							{text: '1/3', onclick: function () {
								ed.execCommand('putColumns', 'one_third');
							}},
							{text: '1/6', onclick: function () {
								ed.execCommand('putColumns', 'one_six');
							}},
							{text: '2/3', onclick: function () {
								ed.execCommand('putColumns', 'two_third');
							}}
						]
					}


				]
			});


			ed.addCommand('putMessage', function (type) {

				var selected_text = ed.selection.getContent();
				var return_text = '';
                if(type == 'alert-danger'){
                    selected_text = '<i class="fa fa-exclamation-triangle"></i>'+selected_text;
                }else if(type == 'alert-warning'){
                    selected_text = '<i class="fa fa-thumbs-up"></i>'+selected_text;
                }else if(type == 'alert-success'){
                    selected_text = '<i class="fa fa-check-circle"></i>'+selected_text;
                }else{
                    selected_text = '<i class="fa fa-info-circle"></i>'+selected_text;
                }
				return_text = '<div class="alert alert-dismissible ' + type + '"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times"></i></span><span class="sr-only">Close</span></button>' + selected_text + '</div>';
				ed.execCommand('mceInsertContent', 0, return_text);

			});

			ed.addCommand('putColumns', function (type) {

				var return_text = '';
				switch (type) {
					case 'one_half':
						return_text = '<div class="row"><div class="col-xs-12 col-md-6 col-sm-6">...</div><div class="col-xs-12 col-md-6 col-sm-6 last">...</div></div>';
						break;
					case 'one_third':
						return_text = '<div class="row"><div class="col-xs-12 col-md-4 col-sm-4">...</div><div class="col-xs-12 col-md-4 col-sm-4 last">...</div><div class="col-xs-12 col-md-4 col-sm-4 last">...</div></div>';
						break;
					case 'one_six':
						return_text = '<div class="row"><div class="col-xs-12 col-md-2 col-sm-2 last">...</div><div class="col-xs-12 col-md-2 col-sm-2 last">...</div><div class="col-xs-12 col-md-2 col-sm-2 last">...</div><div class="col-xs-12 col-md-2 col-sm-2 last">...</div><div class="col-xs-12 col-md-2 col-sm-2 last">...</div><div class="col-xs-12 col-md-2 col-sm-2 last">...</div></div>';
						break;
					case 'two_third':
						return_text = '<div class="row"><div class="col-xs-12 col-md-8 col-sm-8">...</div><div class="col-xs-12 col-md-4 col-sm-4 last">...</div></div>';
						break;


				}

				ed.execCommand('mceInsertContent', 0, return_text);

			});

			ed.addCommand('dropcap', function () {


				ed.execCommand('InsertUnorderedList', 0);
				ed.dom.addClass(ed.dom.getParent(ed.selection.getNode(), 'ul'), 'custom_list');


			});


		},
		createControl: function (n, cm) {

			if (n == 'revslider') {
				var mlb = cm.createListBox('revslider', {
					title   : 'revslider',
					onselect: function (v) {
						alert('asd');
					}
				});


				return mlb;
			}
			return null;
		}



	});
	// Register plugin
	tinymce.PluginManager.add('stm', tinymce.plugins.Shortcodes);
})();