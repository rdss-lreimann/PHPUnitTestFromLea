# eslint config m99coder [![npm Version](https://img.shields.io/npm/v/eslint-config-m99coder.svg)](https://www.npmjs.com/package/eslint-config-m99coder) [![npm Downloads](https://img.shields.io/npm/dm/eslint-config-m99coder.svg)](https://www.npmjs.com/package/eslint-config-m99coder)

> A collection of useful ESLint rules.

[![Build Status](https://img.shields.io/travis/m99coder/eslint-config-m99coder/master.svg)](https://travis-ci.org/m99coder/eslint-config-m99coder)
[![Test Coverage](https://img.shields.io/coveralls/m99coder/eslint-config-m99coder/master.svg)](https://coveralls.io/github/m99coder/eslint-config-m99coder)
[![npm Dependencies](https://img.shields.io/david/m99coder/eslint-config-m99coder.svg)](https://david-dm.org/m99coder/eslint-config-m99coder)
[![npm devDependencies](https://img.shields.io/david/dev/m99coder/eslint-config-m99coder.svg)](https://david-dm.org/m99coder/eslint-config-m99coder#info=devDependencies)

## Installation

You'll first need to install [ESLint](http://eslint.org):

```
$ npm i eslint --save-dev
```

Next, install `eslint-config-m99coder` and `eslint-plugin-m99coder`:

```
$ npm install eslint-config-m99coder eslint-plugin-m99coder --save-dev
```

**Note:** If you installed ESLint globally (using the `-g` flag) then you must also install the packages globally.

## Usage

Add `m99coder` to the plugins section of your `.eslintrc` configuration file. You can omit the `eslint-plugin-` prefix:

```json
{
    "plugins": [
        "m99coder"
    ]
}
```

Then configure the rules you want to use under the rules section as explained in [`eslint-plugin-m99coder`](https://github.com/m99coder/eslint-plugin-m99coder).
