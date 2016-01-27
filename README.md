# drupal6-jsonout
A Drupal 6 theme that outputs Json instead of HTML

This theme is super-simple, and originally based on 'beginning'. The idea of this
theme was to have Drupal emit Json instead of HTML. The primary reason for this
was as a way to export data from Drupal. Clearly, you probably wouldn't want to
do this in production, but it's a great way to get your data out of Drupal on a
clone on your dev server.

This theme was motivated by Drupal 8. I realised it's high time to upgrade, but
I couldn't get much joy out of the migration tools (even though my site isn't
especially complex). I decided it was an ideal time to take a copy of my site
and 'freeze' it in time. By doing this in Json format, I can ue a relatively
simple PHP 'renderer' to render the pages as Drupal used to (but without the
interactivity or database). From them on, importing pages into a Drupal 8
or other system should also be possible.

This is super-simple, and I'm sure doesn't work for all node types or in all
circumstances. Use at your own risk ;-)
