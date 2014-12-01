var irc = require('irc');
var mongojs = require('mongojs');

module.exports = {
	client: new irc.Client('platdev.sfolab.ibm.com', 'logbot', {
		channels: ['#platdev','#webconsole'],
	}),
	logs: mongojs('irclogs').collection('logs'),
	hipchat: null,
	pushover: null,
};
