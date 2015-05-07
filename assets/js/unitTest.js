var assert = require('assert');
 
function validateEmail(email) {
  var regex = /.*@.*\..*/;
  if (typeof email !== 'string'){
    throw new TypeError('Expected string and got a ' + typeof email);
  }
  return (regex.test(email));
}
 
describe('Email Validation', function() {
  describe('Types', function() {
    it('should be a function', function() {
      assert.equal(typeof validateEmail, 'function');
    });
    it('should return a boolean', function() {
      assert.equal(typeof validateEmail('test'), 'boolean');
    });
    describe('Arguments', function() {
      it('should not throw an error for strings', function() {
        var inputs = ['string', 'another string', 'symb0l_$tr1Ng/'];
        inputs.forEach(function(input) {
          assert.doesNotThrow(function() {
            validateEmail(input);
          });
        });
      });
      it('should throw an error for other types', function() {
        var inputs = [ {}, null, [], 1, NaN, undefined ];
        inputs.forEach(function(input) {
          assert.throws(function() {
            validateEmail(input);
          });
        });
      });
    });
  });
  describe('Valid', function() {
    var emails = ['dan@lol.com', 'ed@haha.com'];
    emails.forEach(function(email) {
      it('should return true', function() {
        assert.equal(validateEmail(email), true);
      });
    });
  });

  describe('Invalid', function() {
    var emails = ['danlol.com', 'ed/haha.com'];
    emails.forEach(function(email) {
      it('should return false', function() {
        assert.equal(validateEmail(email), false);
      });
    });
  });
});
