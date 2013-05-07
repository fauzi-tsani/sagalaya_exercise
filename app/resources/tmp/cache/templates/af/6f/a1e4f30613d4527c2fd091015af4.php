<?php

/* tutorial.html.twig */
class __TwigTemplate_af6fa1e4f30613d4527c2fd091015af4 extends \sagalaya\extensions\template\view\adapter\Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "script", array(0 => array(0 => "syntax/shCore", 1 => "syntax/shLegacy", 2 => "syntax/shAutoloader", 3 => "syntax/shBrushPhp", 4 => "syntax/shBrushBash")), "method");
        // line 4
        echo "
";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "style", array(0 => array(0 => "syntax/shCore", 1 => "syntax/shThemeDefault")), "method");
        echo "

<div class=\"span12\">
\t<h2>Basic Tutorial</h2>
\t<p>This is basic tutorial, not all covered on this tutorial. This
\t\tpurpose just to make you has overview what this framework can do.</p>
\t<p>Before we start to coding, we need to include li3 command to PATH,
\t\tbecause it will frequently use when we code</p>
\t<pre class=\"brush: bash\">\$> export PATH=\$PATH:/to/project/libraries/lithium/console</pre>
\t\t
\t<div class=\"tabs\">\t
\t\t
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#working-with-database\">Model</a></li>
\t\t\t<li><a href=\"#model-use-case\" data-toggle=\"tab\">Model Use Case</a></li>
\t\t\t<li><a href=\"#working-with-controller\" data-toggle=\"tab\">Controller</a></li>
\t\t\t<li><a href=\"#working-with-view\" data-toggle=\"tab\">View</a></li>
\t\t\t<li><a href=\"#testing\" data-toggle=\"tab\">Testing</a></li>
\t\t\t<li><a href=\"#best-practice\" data-toggle=\"tab\">Best Practice</a></li>
\t\t</ul>
\t\t
\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"working-with-database\">
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<h6>Chapter Index</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#configuration\">Configuration</a></li>
\t\t\t\t\t\t<li><a href=\"#initialization\">Building Model</a></li>
\t\t\t\t\t\t<li><a href=\"#generator\">Using Code Generator</a></li>
\t\t\t\t\t\t<li><a href=\"#database-scheme\">Generate Database Scheme</a></li>
\t\t\t\t\t\t<li><a href=\"#migrations\">Generate Migrations</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"span8\">
\t\t
\t\t\t\t\t<!-- Connection Configuration -->
\t\t\t\t\t<h3 id=\"configuration\">Configuration</h3>
\t\t\t\t\t<p>You can set a connection configuration at <code>app/config/bootstrap/connections.php</code></p>
\t\t\t\t
\t\t\t\t\t<!-- Building Model -->
\t\t\t\t\t<h3 id=\"initialization\">Building Model</h3>
\t\t\t\t\t<p>In sagalaya we define model using ";
        // line 46
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Doctrine Annotation Driver", 1 => "http://www.doctrine-project.org/docs/orm/2.1/en/reference/annotations-reference.html"), "method");
        echo ". 
\t\t\t\t\tEvery model in app/models folder must be inherited <code>app\\extensions\\data\\Model</code> class. Below is the code example.</p> 
\t\t\t\t\t<pre class=\"brush: php\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\tnamespace app\\models;
\t\t\t\t\t\t
\t\t\t\t\t\t/**
\t\t\t\t\t\t * @Entity(repositoryClass=\"app\\resources\\repository\\UserRepository\")
\t\t\t\t\t\t * @HasLifecycleCallbacks
\t\t\t\t\t\t * @Table(name=\"users\")
\t\t\t\t\t\t */
\t\t\t\t\t\tclass User extends \\app\\extensions\\data\\Model {
\t\t\t\t\t\t    
\t\t\t\t\t\t    /** @Id @Column(type=\"integer\") @GeneratedValue */
\t\t\t\t\t\t    protected \$id = null;
\t\t\t\t\t\t
\t\t\t\t\t\t    /** @Column(type=\"string\", length=64) */
\t\t\t\t\t\t    protected \$fullname = null;
\t\t\t\t\t\t
\t\t\t\t\t\t    /** @Column(type=\"string\", length=64) */
\t\t\t\t\t\t    protected \$email = null;
\t\t\t\t\t\t    
\t\t\t\t\t\t} \t\t\t\t
\t\t\t\t\t</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- Using Generator -->
\t\t\t\t\t<h3 id=\"generator\">Using Code Generator</h3>
\t\t\t\t\t<p>When build an application, we frequently doing some repetitive task, like create model, controller, view, test.</p>
\t\t\t\t\t<p>So to make faster creating starting code, sagalaya provide generator. Generator will read xml files from <code>app/config/design</code> folder.
\t\t\t\t\tEvery xml file will parsed by generator to create model, controller, view, model test, controller test, and repository.</p>
\t\t\t\t\t<p>You can see a sample xml file <strong>";
        // line 75
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "HERE", 1 => "/files/samples/user.xml"), "method");
        echo "</strong>. To generate all you just need to call generator in console at project folder.</p>
\t\t\t\t\t<pre class=\"brush: bash\">\$> li3 generator</pre>
\t\t\t\t\t 
\t\t\t\t\t<!-- Generate Database Scheme -->
\t\t\t\t\t<h3 id=\"database-scheme\">Generate Database Scheme</h3>
\t\t\t\t\t
\t\t\t\t\t<p>After we crated the class model, we need to create schema database, we can using doctrine command line.</p>
\t\t\t\t\t<pre class=\"brush: bash\">\$> li3 doctrine orm:schema-tool:create</pre>
\t\t\t\t\t
\t\t\t\t\t<p>If you already has a schema from previous created schema, and you need to update schema because some changes on model file.
\t\t\t\t\tYou can call this command.</p>
\t\t\t\t\t<pre class=\"brush: bash\">\$> li3 doctrine orm:schema-tool:update</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- Generate Migrations -->
\t\t\t\t\t<h3 id=\"migrations\">Generate Migrations</h3>
\t\t\t\t\t<p>When we build an app, sometime we need a dummy data. To create that we can using migrations feature in doctrine.</p>
\t\t\t\t\t<pre class=\"brush: bash\">\$> li3 doctrine migrations:generate</pre>
\t\t\t\t\t
\t\t\t\t\t<p>This command will generate php file in <code>app/migrations</code> folder that we can fill php code in up() method to create some data</p>
\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\$type = new UserType(array('type' => 'Administrator'));
\t\t\t\t\t\t\$type->save();
\t\t\t\t\t</pre>
\t\t\t\t\t
\t\t\t\t\t<p>Then you can call up() from migrations from console</p>
\t\t\t\t\t<pre class=\"brush: bash\">\$> li3 doctrine migrations:migrate</pre>
\t\t\t\t\t
\t\t\t\t\t<p>There is also down() method, in case you want to revert the migrations. You can write like this.</p>
\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\$type = UserType::findOneBy(array('type' => 'Administrator'));
\t\t\t\t\t\t\$type->delete();
\t\t\t\t\t\t
\t\t\t\t\t\t// it will have same effect with the code below
\t\t\t\t\t\t\$type = UserType::findOneByType('Administrator');
\t\t\t\t\t\t\$type->delete();
\t\t\t\t\t</pre>
\t\t\t\t\t<p>To revert migrations you can use this command</p>
\t\t\t\t\t<pre class=\"brush: bash\">\$> li3 doctrine migrations:migrate :revision-number</pre>\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"model-use-case\">\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<h6>Chapter Index</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#crud\">Create-Update-Delete</a></li>
\t\t\t\t\t\t\t<li><a href=\"#querying\">Querying Model</a></li>
\t\t\t\t\t\t\t<li><a href=\"#model-repository\">Model Repository</a></li>\t
\t\t\t\t\t\t\t<li><a href=\"#model-validation\">Model Validation</a></li>\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"span8\">\t\t\t\t\t\t
\t
\t\t\t\t\t\t\t<!-- CRUD -->
\t\t\t\t\t\t\t<h3 id=\"crud\">Create-Update-Delete</h3>
\t\t\t\t\t\t\t<p>CRUD is the basic use-case for model, because it will be routine task, we must simplify this process.
\t\t\t\t\t\t\tBelow is the sample of basic use-case for model</p>
\t\t\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\t\t    public function create()
\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t        if (\$this->request->data) {
\t\t\t\t\t\t\t\t        \t\$user = new User(\$this->request->data);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        \tif(\$user->save()) {
\t\t\t\t\t\t\t\t        \t\t\$this->message('Successfully to create User');
\t\t\t\t\t\t\t\t        \t\t\$this->redirect('Users::index');
\t\t\t\t\t\t\t\t        \t} else {
\t\t\t\t\t\t\t\t        \t\t\$this->message('Failed to create User, please check the error');
\t\t\t\t\t\t\t\t        \t\t\$errors = \$user->getErrors();        \t\t
\t\t\t\t\t\t\t\t        \t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        return compact('user', 'errors');
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t</pre>
\t\t\t\t\t\t\t<p>To <strong>create new object</strong>, we need to declared new Object() with params is the default value for object. 
\t\t\t\t\t\t\tUsually this is provided from html form data. The important thing is the params must associated with model properties.
\t\t\t\t\t\t\te.g : <code>new User(array('email' => 'some@example.com'))</code>. After initialize value we can call <code>save()</code>
\t\t\t\t\t\t\tmethod to make persistent to database.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<pre class=\"brush: php\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    public function edit()
\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t        if (\$this->request->id) {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        \t\$user = User::get(\$this->request->id);
\t\t\t\t\t\t\t\t        \t\$user->properties = \$this->request->data;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        \tif(\$user->save()) {
\t\t\t\t\t\t\t\t        \t\t\$this->message('Successfully to update User');
\t\t\t\t\t\t\t\t        \t\t\$this->redirect('Users::index');
\t\t\t\t\t\t\t\t        \t} else {
\t\t\t\t\t\t\t\t        \t\t\$this->message('Failed to update User, please check the error');
\t\t\t\t\t\t\t\t        \t\t\$errors = \$user->getErrors();
\t\t\t\t\t\t\t\t        \t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        return compact('user', 'errors');
\t\t\t\t\t\t\t\t    }\t\t\t\t\t\t
\t\t\t\t\t\t\t</pre>
\t\t\t\t\t\t\t<p><strong>To update model</strong>, the first thing we must do is calling the model from database with <code>get()</code>.
\t\t\t\t\t\t\tThis mean, persistent data from database convert to object. After that, we can set <code>\$object->properties</code> with new value.
\t\t\t\t\t\t\tactually there's no <strong>'properties'</strong> property on object, this is just flag to indicate that we want to update the field.
\t\t\t\t\t\t\te.g : <code>\$user->properties = array('email' => 'new@email.com', 'fullname' => 'New Fullname')</code> </p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Querying Model -->
\t\t\t\t\t\t\t<h3 id=\"querying\">Querying Model</h3>
\t\t\t\t\t\t\t<p>Doctrine support ";
        // line 186
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "DQL", 1 => "http://www.doctrine-project.org/docs/orm/2.1/en/reference/dql-doctrine-query-language.html"), "method");
        echo " 
\t\t\t\t\t\t\tor ";
        // line 187
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "Native SQL", 1 => "http://www.doctrine-project.org/docs/orm/2.1/en/reference/native-sql.html"), "method");
        echo ", 
\t\t\t\t\t\t\tbut using that methods will break the intuitiveness of ORM. So we provide the powerfull <code>findAll()</code> method, 
\t\t\t\t\t\t\tbesides the existing <code>findOne</code>, <code>findOneBy</code> methods (";
        // line 189
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "see here", 1 => "http://www.doctrine-project.org/docs/orm/2.1/en/reference/working-with-objects.html#querying"), "method");
        echo ").</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>But for <code>findAll()</code> method, we create more features than findAll Doctrine has created. The input for method is array that provide this params : 
\t\t\t\t\t\t\t<code>-select, -where and, -where or, '-leftJoin', '-innerJoin', '-orderBy', '-groupBy', '-limit', '-offset'</code>. Below is the code examples.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\t\t\$users = User::findAll(array(
\t\t\t\t\t\t\t\t\t'select' => array(
\t\t\t\t\t\t\t\t\t\tarray('field' => 'type'),
\t\t\t\t\t\t\t\t\t\tarray('field' => array('salary', 'others'), 'aggregate' => 'SUM', 'operator' => '*', 'as' => 'income'),
\t\t\t\t\t\t\t\t\t\tarray('field' => 'id', 'aggregate' => 'COUNT', 'as' => 'number')
\t\t\t\t\t\t\t\t\t),
\t\t\t\t\t\t\t\t\t'where' => array(
\t\t\t\t\t\t\t\t\t\t'and' => array(
\t\t\t\t\t\t\t\t\t\t\tarray('fullname' => array('eq' => 'someone')),
\t\t\t\t\t\t\t\t\t\t\tarray('email' => array('nlike' => '%@gmail.com%'))
\t\t\t\t\t\t\t\t\t\t),
\t\t\t\t\t\t\t\t\t\t'or' => array(
\t\t\t\t\t\t\t\t\t\t\tarray('active' => array('eq' => true))
\t\t\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t\t\t),
\t\t\t\t\t\t\t\t\t'leftJoin' => array(
\t\t\t\t\t\t\t\t\t\tarray(
\t\t\t\t\t\t\t\t\t\t\t'field' => 'type'
\t\t\t\t\t\t\t\t\t\t\t'where' => array(
\t\t\t\t\t\t\t\t\t\t\t\tarray('type' => array('eq' => 'Administrator'))
\t\t\t\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t\t));
\t\t\t\t\t\t\t</pre>
\t\t\t\t\t\t\t<p>For <code>leftJoin</code> or <code>innerJoin</code> param, you can set nested leftJoin/innerJoin, and adding condition for every join.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Model Repository -->
\t\t\t\t\t\t\t<h3 id=\"model-repository\">Model Repository</h3>
\t\t\t\t\t\t\t<p>A Repository is a mechanism for encapsulating storage, retrieval, and search behavior which emulates a collection of objects.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>As default, every model has basic repository methods like <code>find, findOne, findOneBy, findAll</code>. But you can extends function of your models with adding 
\t\t\t\t\t\t\tmore function to model repository. As default repository placed at <code>app/resources/repository</code>, this path is defined at model class.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\t\t/**
\t\t\t\t\t\t\t\t * @Entity(repositoryClass=\"app\\resources\\repository\\UserRepository\")
\t\t\t\t\t\t\t\t * @HasLifecycleCallbacks
\t\t\t\t\t\t\t\t * @Table(name=\"users\")
\t\t\t\t\t\t\t\t */
\t\t\t\t\t\t\t\tclass User extends \\app\\extensions\\data\\Model
\t\t\t\t\t\t\t</pre>
\t\t\t\t\t\t\t<p>On repository class you can adding more function.</p>
\t\t\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\t\tclass UserRepository extends \\Doctrine\\ORM\\EntityRepository
\t\t\t\t\t\t\t\t{\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tpublic function getLastRegisterUser() {
\t\t\t\t\t\t\t\t\t\t// doing something
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</pre>
\t\t\t\t\t\t\t<p>You can call this function using static method in object</p>
\t\t\t\t\t\t\t<pre class=\"brush: php\">\$lastRegistered = User::getlastRegisterUser();</pre> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Model Validation -->
\t\t\t\t\t\t\t<h3 id=\"model-validation\">Model Validation</h3>
\t\t\t\t\t\t\t<p>To define validations on model we declare <code>\$validations</code> property, below is the code examples.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\t\tprotected \$validations = array(
\t\t\t\t\t\t\t\t\t'fullName' => array(
\t\t\t\t\t\t\t\t\t\tarray('notEmpty', 'message' => 'Fullname can\\'t be empty'),
\t\t\t\t\t\t\t\t\t\tarray('custom', 'message' => 'Fullname can\\'t be George Bush',
\t\t\t\t\t\t\t\t\t\t\t\t'function' => 'return strcasecmp(\$object->fullName, \"George Bush\") != 0;')
\t\t\t\t\t\t\t\t\t),
\t\t\t\t\t\t\t\t\t'email' => array(
\t\t\t\t\t\t\t\t\t\tarray('notEmpty', 'message' => 'Email can\\'t be empty'),
\t\t\t\t\t\t\t\t\t\tarray('unique', 'message' => 'Email has been used, try another!')
\t\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t\t);\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</pre>\t\t\t\t\t\t
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<caption>Validation types</caption>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t<th>Format</th>
\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>notEmpty</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a string contains at least one non-whitespace character.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>alphaNumeric</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a string contains only integer or letters.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>lengthBetween</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'min', 'max'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a string length is within a specified range. Spaces are included in the character count.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>blank</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a field is left blank **OR** only whitespace characters are present in its value. Whitespace characters include spaces, tabs, carriage returns and newlines.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>creditCard</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid credit card number.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>date</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid date that complies with one or more formats.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>time</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid time. Validates time as 24hr (HH:MM) or am/pm ([ H]H:MM[a|p]m). Does not allow / validate seconds.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>boolean</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that the value is or looks like a boolean value. The following types of values are interpreted as boolean and will pass the check.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>decimal</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'precission'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid decimal.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>email</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is (probably) a valid email address.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>ip</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Validates a string as a valid IPv4 or IPv6 address.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>money</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid monetary amount.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>numeric</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is numeric.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>phone</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Check that a value is a valid phone number, non-locale-specific phone number.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>postalCode</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a given value is a valid US postal code.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>inRange</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'upper', 'lower'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a numeric value is within a specified range.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>url</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid URL according to [RFC 2395](http://www.faqs.org/rfcs/rfc2396.html).</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>luhn</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid credit card number according to the [Luhn algorithm](http://en.wikipedia.org/wiki/Luhn_algorithm).</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>inList</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'list'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is in a pre-defined list of values.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>regex</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'value'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value appears to be a valid regular expression, possibly containing PCRE-compatible options flags.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>uuid</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Checks that a value is a valid UUID.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>unique</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message'</td>
\t\t\t\t\t\t\t\t\t\t<td>Check if the value of field is unique on database.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>equalWith</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'with'</td>
\t\t\t\t\t\t\t\t\t\t<td>Check if the value one of field is same with other field.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>custom</td>
\t\t\t\t\t\t\t\t\t\t<td>'type', 'message', 'function'</td>
\t\t\t\t\t\t\t\t\t\t<td>Adding custom rule for the object, with function can access \$object for the current instance.</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"working-with-controller\">
\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"ym-vlist\">
\t\t\t\t\t\t\t\t<h6>Chapter Index</h6>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#default-routing\">Default Routing</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#action-configuration\">Action Configuration</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#redirecting\">Redirecting</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Default Routing -->
\t\t\t\t\t\t\t<h3 id=\"default-routing\">Default Routing</h3>
\t\t\t\t\t\t\t<p>Routing rules is placed at <code>app/config/routes.php</code></p>

                            <p>There's no many changes for routing, you can see documentation at
                                <a href=\"http://lithify.me/docs/lithium/net/http/Router\">Lithium documentation</a> </p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Action Configuration -->
\t\t\t\t\t\t\t<h3 id=\"action-configuration\">Action Configuration</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Redirecting -->
\t\t\t\t\t\t\t<h3 id=\"redirecting\">Redirecting</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"working-with-view\">\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"span2\">\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<h6>Chapter Index</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#twig-templating\">Twig Templating</a></li>
\t\t\t\t\t\t\t<li><a href=\"#layout\">Element and Layout</a></li>
\t\t\t\t\t\t\t<li><a href=\"#view-helper\">View Helper</a></li>
\t\t\t\t\t\t</ul>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"span8\">\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Twig Templating -->
\t\t\t\t\t\t\t<h3 id=\"twig-templating\">Twig Templating</h3>
\t\t\t\t\t\t\t<span>For documentation you can click ";
        // line 451
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($this->getAttribute($_this_, "html"), "link", array(0 => "here", 1 => "http://twig.sensiolabs.org/doc/templates.html"), "method");
        echo ",
\t\t\t\t\t\t\tbelow is example on form view (e.g : create.html.twig)</span>
\t\t\t\t\t\t\t<pre class=\"brush: php\">
\t\t\t\t\t\t\t\t";
        // line 469
        echo "
\t\t\t\t\t\t\t\t\t\t{% macro errors(input) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for error in input %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"warning\">{{error}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% endmacro %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{{ this.form.create() }}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{{ this.form.field('username',{'value':user.username})}}
\t\t\t\t\t\t\t\t\t\t\t\t{{ _self.errors(errors.username) }}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{{ this.form.submit('Create',{'class':'btn-submit'}) }}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{{ this.form.end() }}
\t\t\t\t\t\t\t\t";
        echo "
\t\t\t\t\t\t\t</pre>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Element and Layout -->
\t\t\t\t\t\t\t<h3 id=\"layout\">Element and Layout</h3>
                            <span>Layout is a template file (twig) that reside on <code>views/layouts</code> folder.
                            As default <code>default.html.twig</code> file is used to render page.</span>

                            <span>Layout file is like a theme on application, the content of each page will be rendered
                            on layout file. The page content called on layout using <code>";
        // line 478
        echo " {{ this.content() }} ";
        echo "</code></span>

                            <span>You can defined many layout files. When you need to load specific layout for some action you can
                            choose which layout you want to use.</span>

                            <pre class=\"brush: php\">
                                public function someAction() {
                                    // set blank.html.twig on layouts folder as layout for this action
                                    \$this->_render['layout'] = 'blank';
                                }
                            </pre>

                            <span>On application we found <code>views/elements</code> folder.
                            In elements folder we can create twig file that will be use on others template file.</span>

                            <pre class=\"brush: php\">
                                ";
        // line 496
        echo "
                                    {% include \"leftbar.html.twig\" %}
                                ";
        echo "
                            </pre>

                            <span>The important think is, the file you try to include has path that relative to
                            <code>views/elements</code> folder.</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- View Helper -->
\t\t\t\t\t\t\t<h3 id=\"view-helper\">View Helper</h3>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t</div>\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"testing\">\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<h6>Chapter Index</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#unit-testing\">Unit Testing</a></li>
\t\t\t\t\t\t\t<li><a href=\"#integration-testing\">Integration Testing</a></li>
\t\t\t\t\t\t\t<li><a href=\"#code-quality\">Code Quality Assurance</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"span8\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Twig Templating -->
\t\t\t\t\t\t<h3 id=\"twig-templating\">Unit Testing</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Element and Layout -->
\t\t\t\t\t\t<h3 id=\"layout\">Integration Testing</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- View Helper -->
\t\t\t\t\t\t<h3 id=\"code-quality\">Code Quality Assurance</h3>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"best-practice\">
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<h6>Chapter Index</h6>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#add-business-layer\">MVC + Business Layer</a></li>
\t\t\t\t\t\t\t<li><a href=\"#domain-repository\">Domain Repository</a></li>
\t\t\t\t\t\t\t<li><a href=\"#thin-controller\">Thin Controller</a></li>
\t\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"span8\">
\t\t\t\t\t<!-- MVC + Business Layer -->
\t\t\t\t\t<h3 id=\"add-business-layer\">MVC + Business Layer</h3>
\t\t\t\t\t
\t\t\t\t\t<!-- Domain Repository -->
\t\t\t\t\t<h3 id=\"domain-repository\">Domain Repository</h3>
\t\t\t\t\t
\t\t\t\t\t<!-- Thin Controller -->
\t\t\t\t\t<h3 id=\"think-controller\">Thin Controller</h3>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t\t\t\t 
\t</div>
\t
</div>
<script type=\"text/javascript\">
\tSyntaxHighlighter.all();\t
</script>";
    }

    public function getTemplateName()
    {
        return "tutorial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 496,  520 => 478,  493 => 469,  486 => 451,  220 => 189,  214 => 187,  209 => 186,  94 => 75,  61 => 46,  16 => 5,  13 => 4,  10 => 2,  7 => 1,);
    }
}
