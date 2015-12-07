function Theme(data){
  this.product  = data('product');
  this.style    = data('style')
  this.theme    = data('theme');
}

var anvil = new Theme({'product' = 'Anvil',
                       'style'   = 'default',
                       'theme'   = {'hex'      = '#981b1e',
                                    'color'    = 'red',
                                    'headline' = 'raleway',
                                    'body'     = 'raleway'}
                      });