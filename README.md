# SMS Recycle

Web service to receive SMS online annonymously created in PHP/MySQL over a day of messing around. Currently works with:

  - Nexmo.com
  - Plivo.com
  
### Version
1.0

### Todo's
- Twilio integration
- Add 'private number' option (pass protect?)
- Add reserve this number option (pay?)

Markdown is a lightweight markup language based on the formatting conventions that people naturally use in email.  As [John Gruber] writes on the [Markdown site] [1]:

> The overriding design goal for Markdown's
> formatting syntax is to make it as readable
> as possible. The idea is that a
> Markdown-formatted document should be
> publishable as-is, as plain text, without
> looking like it's been marked up with tags
> or formatting instructions.

This text you see here is *actually* written in Markdown! To get a feel for Markdown's syntax, type some text into the left window and watch the results in the right.

### Installation

Create the 'messages' table in your database and fill out the config.php with your details.

```sql
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(8) NOT NULL,
  `sentfrom` bigint(20) NOT NULL,
  `sentto` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
```

### Development
If you have suggestions or requests, contact me via http://tj.mk

License
----

WTFPL
http://www.wtfpl.net/txt/copying/