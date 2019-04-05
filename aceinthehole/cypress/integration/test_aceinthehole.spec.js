describe('First test', function() {
    it('Tests that the test runs', function () {
        expect(true).to.equal(true)
    })
})

describe('Run application', function() {
    it('Loads page', function() {
        cy.visit('http://breannabsmith.com/cas222/aceinthehole')
    })
})

describe('Checks for hidden content', function() {
    it('Check for .dropdown-content to be hidden', function() {
        cy.get('.dropdown-content').should('be.hidden')
    })
})

describe('Checks href attribute', function() {
    it('check href', function() {
        cy.get('a').debug().should('have.attr', 'href')
    })
})

describe('Submits form', function() {
    it('submit button', function() {
        cy.visit("http://breannabsmith.com/cas222/aceinthehole/register")
        cy.visit("http://breannabsmith.com/cas222/aceinthehole/contact")
        cy.on('uncaught:exception', (err, runnable) => {
 
            return false
        })
          cy.get('#mysubmit').click('center')     
    })
})