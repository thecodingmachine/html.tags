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

List of supported tags
----------------------

Basically, all the tags supported and not deprecated in HTML5. You can get a 
[complete list on the W3C wiki](http://www.w3.org/community/webed/wiki/HTML/Elements).

How to use it?
--------------

###Basic usage

Pretty easy. You just create a tag using the `new` keyword and use getters and setters to set attributes. Finally,
you call the `toHtml()` method to render the tag.

```php
$div = new Div();
$div->setId('myDiv');
$div->toHtml();
```

###Fluent interface

The setter are using a fluent interface, so you can chain several setters if you want:

```php
$input = new Input();
$input->setType('text')->setName('company')->setLabel('TheCodingMachine');
$input->toHtml();
```

###Setting classes and styles

You can set classes and styles using arrays or strings:

```php
$label = new Label();
$label->setClasses(array("css-class1 css-class2"));
$label->setStyles(array("background-color" => "red"));
$label->toHtml();
```

You can also add a class or a style using `addClass` or `addStyle`.

```php
$label->addClass("css-class3");
$label->addStyle("background-color", "red");
```

###Managing children

You can add children to your tags using `setChildren` or `addChild`.

```php
$div->setChildren(array($label, $input));
```

```php
$div->addChild($label);
```

###Adding text to a tag

Use the `addText` to add text to a tag.

```php
$p = new Paragraph();
$p->addText("This is my text");
```

Note: this is similar to creating a `HtmlString` instance and adding it to the node:

```php
// Similar to:
$p->addChild(new HtmlString("This is my text"));
```

Adding your own custom tags
---------------------------

You might be interested in adding your owns classes that generate custom HTML code.
All you have to know is that all the tags are implementing the 
[`HtmlElementInterface`](http://mouf-php.com/packages/mouf/html.htmlelement/README.md).

This is a simple interface with a single `toHtml()` method.

What is this ValueInterface thing?
----------------------------------

If you have had a look at the code, you might have noticed that each setter accepts objects
implementing the [`ValueInterface` interface](http://mouf-php.com/packages/mouf/utils.value.value-interface/README.md).

This is a very powerful feature allowing you to put objects that will be evaluated when
they are rendered. When the tag is rendered, the `val()` method of the object is called
and attributed.

Mouf package
------------

This package is part of [Mouf](http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
