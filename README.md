# web_crawler_01_AA_jobs
A web crawler and database for finding new posts


ℹ️ **Important Note:** This is a personal project published for informational purposes only. No usage rights are granted. Please see the [License & Liability Disclaimer](#license--liability-disclaimer) at the end of this file.








# Why
Custom database and scripts will ease/automate the checking of pages and later categorizing the results (old,new,recreated and also other categories).
Because I can and I want or need it.

# How
- Create local Docker container, so the system is isolated and easily recreated.
Install Apache web server, PHP and SQLite in the container.
- Create web extension to crawl the fully rendered pages- some pages are with heavy scripts and "visual" crawling is easier. What you see is what you get. No complicated reverse engineering of the multitude of scripts is required. Probably later move to WebDriver.
- Use the web server to serve pages with the visualization of the local database.


<br><br><br><br><br><br>




-----
# License & Liability Disclaimer

Copyright (c) 2026 [gergovassilev]. All rights reserved.

### 1. No License / Usage Restrictions
This is a personal project. It is made public solely for informational and educational purposes. Making this repository public does not grant any license or right to use, copy, modify, or distribute the code or any parts of it for any purpose.

### 2. Disclaimer of Warranty & Liability
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 

IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.









