### EXPLANATION

A simple Craft CMS plugin with different utilities.


### USAGE

#### Link an Email Address

Optionally, include class, id, and the text

```
{{ "test@test.com"|linkemail('myclass', 'myid', 'the text') }}
{{ "test@test.com"|linkemail('', '', 'my email addy') }} 
```

### Convert a Comma Separated List (CSV) to a < li > List</h3>

Optionally include a class for the li tag
This assumes you'll use your own ul or ol tag

```{{ "one, two, three"|csvtolist('myclass') }}```


#### Unix Timestamp with Milliseconds Converted to Date Format

Convert a Unix Timestamp with milliseconds to date format
Optionally, include your own custom date format (defaults to m/d/y)

```
{{ "1408066314000"|unixmstodate }}
{{ "1408066314000"|unixmstodate('y-m-d') }}
```

#### Unix Timestamp Converted to Date Format

Convert a Unix Timestamp without milliseconds to date format
Optionally, include your own custom date format (defaults to m/d/y)

```
{{ "1408066314"|unixtodate }}
{{ "1408066314"|unixtodate('y-m-d') }}
```

### SUPPORT

We are available for private consultation if you like assistance with any web projects. There is no official support for this plugin.

http://3redkites.com/contact

### LICENSING

See LICENSE.txt for licensing information.



### LIMITATIONS OF LIABILITY

YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION 
AND USE OF THE SOFTWARE. IN NO EVENT SHALL THE AUTHORS 
OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE FOR 
CLAIMS, DAMAGES OR OTHER LIABILITY RISING FROM, OUT OF, 
OR IN CONNECTION WITH THE SOFTWARE. LICENSE HOLDERS ARE 
SOLELY RESPONSIBLE FOR DETERMINING THE APPROPRIATENESS 
OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, 
INCLUDING BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, 
DAMAGE TO EQUIPMENT, LOSS OF DATA OR SOFTWARE PROGRAMS, 
OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.

### DISCLAIMER OF WARRANTY

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY 
KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE 
WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR 
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS 
OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR 
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR 
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

