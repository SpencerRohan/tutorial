//QUICK HELPER FOR GULP FILE -- NOT NECESSARY FILE SANDBOX

function Theme(data){
  this.product  = data['product'];
  this.style    = data['style'];
  this.theme    = data['theme'];
  this.name     = data['name'];
}

Theme.prototype = {
   writeLess:
    function() {
      return '@theme-hex: ' + this.theme['hex'] + ';\n'
      + '@theme-color: ' + this.theme['color'] + ';\n'
      + '@theme-headline: @' + this.theme['headline'] + ';\n'
      + '@theme-body: ' + this.theme['color'] + ';\n'
      + '@style: ' + this.style + ';\n'
      + '@product: ' + this.product + ';\n'
    }
}

var anvil = new Theme({product: 'Anvil',
                       style:   'default',
                       name: 'anvil',
                       theme:  {hex:      '#981b1e',
                                color:    'red',
                                headline: 'raleway',
                                body:     'raleway'}
                      });

var glue = new Theme({product: 'Glue',
                       style:  'default',
                       name: 'glue',
                       theme:  {hex:      '#B7AF1F',
                                color:    'green',
                                headline: 'oswald',
                                body:     'helvetica'}
                      });

var jet = new Theme({product: 'Jet Propelled Unicycle',
                       style:  'default',
                       name: 'jet',
                       theme:  {hex:      '#DCA65A',
                                color:    'blue',
                                headline: 'roboto_slab',
                                body:     'helvetica'}
                      });

var themes = [anvil, glue, jet];