What is this package?
=====================

This package contains a pure PHP object representation of HTML5 tags. There is one class for each existing HTML tag, and one getter/setter per attribute.

Why bother?
-----------

There are plenty of ways to represent HTML tags as PHP objects, and most of the time, you might not need one class per tag (you can use a generic PHP object representing any HTML tag like [here](http://davidwalsh.name/create-html-elements-php-htmlelement-class), [here](http://www.phpclasses.org/package/1910-PHP-Generate-HTML-document-tags-programatically.html) or , [here](http://code.google.com/p/php-class-html-generator/)).

So why bother with one class per tag?

Well for a few reasons:

- You can have autocompletion when using the tags (if you are using a sensible PHP IDE)
- You can use those tags in dependency injection frameworks (this part might sound completely crazy to you until you learn more about the [Mouf PHP framework](http://mouf-php.com).

How to use it?
--------------

Pretty easy. You just create a tag using the `new` keyword and use getters and setters to set attributes. Finally,
you call the `toHtml()` method to render the tag.

```
$div = new Div();
$div->setId('myDiv');
$div->toHtml();
```


children
fluent interface
TODO: class: add, array
style: add, array
ValueInterface


Mouf package
------------

This package is part of [Mouf](http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
