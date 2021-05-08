Layout for onepiece-framework
===

# File location

 The layout is placed in the following directory.

```
app:/asset/layout
```

 The layout uses a common template files.

```
app:/asset/template/layout
```

 Set the config file in the following path.

```
app:/asset/config/layout.php
```

# Config

```app:/asset/config/layout.php
return [
  'execute'   =>  true,
  'name'      => 'white',
  'darkmode'  =>  true,
];
```

# Usage

 How to dynamic disabled the Layout.

```
Config::Set('layout', ['name'=>'layout_name']);
```

 How to dynamic switch the Layout.

```
Config::Set('layout', ['name'=>'layout_name']);
```
