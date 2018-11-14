## P3 Peer Review

+ Reviewer's name: Sandra Anderson
+ Reviwee's name: Juan Ignacio
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/jandra31/p3/tree/master/p3>*


## 1. Interface
+ What are your initial impressions of the site interface?
  * Upon acessing the site, I was not sure what the application functionality was.
  * The interface itself, although clean lacks any 'pizzaz' - this was actually the first comments 
  from my users in user testing for my application.
+ Were there any parts of the interface that you found confusing, or did not work as you expected?
  * There was no navigation, so you needed to use the back button to return to the main page.
  Later saw that there was a link at the bottom of the page.


## 2. Functional testing

+ Initially tested in Firefox. When I click to enter a payment name, my cursor does not show up. 
The text field appears to be cut off or centered beyond the field length. Moved to Chrome, s
ame issue. Works well in Safari.
+ Created test1, with no other data entered. Popups told me that the date field was required.
  * The calendar field does not display in Safari. I had the same issue and changed to 
  a test field since calendar will give a warning on validation.
  * Entered the date of 11/12/2018, clicked 'Add' and it showed errors below the form for 
  the remaining fields. The previous entries we not re-populated.
  * Completed the form with Name, Date and Type, error displayed that the date needs 
  to be after or equal to today. Nice validation on date range. 
  (I think there may be a timezone issue here?)
  * Submitted again with tomorrows date. This worked.
+ Resulting page for submitting a new payment.
  * The payment I just submitted for a 'One Time' did not appear.
  * There was a dump statement at the top of the page.
  * When I filtered for my one time payment, I received a 404 error 
  "/p3/public/result_filter was not found on this server"
+ Clicked the link back to the Add a payment page. Tested with some other inputs
  * Numbers in the name field, incorrect date format and no payment type resulted 
  in the proper error of event type being blank.
  * No Name, Payment date of '2018-12-10' and event type resulted in 
  the pop up to enter the field.
  The pop up validation does repopulate the date and type that I previously entered.
  * Continued to create test 2 entry with at description.
  * Same results as before. My guess is the update is not functional. 
  Just the entry, validation and filtering - continued my testing from there.
+ On the filtering page all filter options returned the above 404 error message.
  

## 3. Code: Routes
+ Routes looks clean and as expected.
+ The result filter route is available as: `'/result_filter', 'EventController@filter_results'>`
This would be from the filter action on the results page.
+ There is also a `('/result', 'EventController@result');` This would be the 
result of clicking the current list link on the home page
+ Using post as data is being added. This posts to the create route and `add_event`

## 4. Code: Views
+ Template inheritance is used.
+ There is no blade code for re-populating the values that were previously entered.
+ Blade code for error reporting using for each
+ The Laravel welcome view was still in the code. When I saw this intially 
I thought there was a welcome  page with navigation that I had missed in 
looking at the site.
+ In the results view, the filtering logic does not appear to do anything. 
The filtering logic is actually in the controller, as would be expected. :-)

## 5. Code: General
+ Ran through the validator with 1 error and 1 warning. The warning was the 
calendar input type that does not work in all browsers. It shows up as a text
field in those not supported.
+ `filterval` values of P, D, 1, etc are a little confusing when reading the code


## 6. Misc
+ I am a little confused with the overall flow within the controller, 
but maybe it would make sense once the add or create was added.
  * For example, in the add_event you are looking for the results from the session, 
  but I do not see where the results would be passed to the add_event funtion in the flow.
  * filter is returned from the add_event, but do not see where it is passed from.
  * get_results seems to be a placeholder.
  
