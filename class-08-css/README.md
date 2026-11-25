# Class-07

## Topics:

- ## Common Text Properties

|    Property     |            Example             |                    What it does                    |
| :-------------: | :----------------------------: | :------------------------------------------------: |
|      color      |          color: #333;          |                     Text color                     |
|    font-size    |        font-size: 18px;        |                    Size of text                    |
|   font-weight   |       font-weight: 700;        |         Thickness (100–900, bold, normal)          |
|   font-style    |      font-style: italic;       |                  Italic / normal                   |
|   text-align    |      text-align: center;       | Horizontal alignment: left, right, center, justify |
| text-decoration |  text-decoration: underline;   |           underline, line-through, none            |
| text-transform  |   text-transform: uppercase;   |          uppercase, lowercase, capitalize          |
|   line-height   |       line-height: 1.6;        |                Space between lines                 |
| letter-spacing  |      letter-spacing: 2px;      |               Space between letters                |
|  word-spacing   |       word-spacing: 5px;       |                Space between words                 |
|   text-indent   |       text-indent: 30px;       |                 Indent first line                  |
|   text-shadow   | text-shadow: 2px 2px 4px gray; |                 Shadow behind text                 |
|   white-space   |      white-space: nowrap;      |     How whitespace wraps (normal, nowrap, pre)     |

- ## CSS Display
  display decides how an element behaves in the layout.

### Main Values

|    Value     |                           Behavior                           |
| :----------: | :----------------------------------------------------------: |
|    block     |     Takes full width, starts on a new line (div, h1, p)      |
|    inline    | Sits in the flow of text, ignores width/height (<span>, <a>) |
| inline-block |     Sits inline BUT accepts width/height/padding/margin      |
|     none     |        Completely removed from page (no space taken)         |
|     flex     |           Turns the element into a flex container            |
|     grid     |           Turns the element into a grid container            |

- ## CSS Overflow

Controls what happens when content doesn't fit inside its box.

### Values

|       Value       |            Behavior             |
| :---------------: | :-----------------------------: |
| visible (default) |       Content spills out        |
|      hidden       |       Clips extra content       |
|      scroll       |     Always shows scrollbars     |
|       auto        | Shows scrollbars only if needed |

- ## CSS Position
  position decides how an element is placed in the document.

### The 5 Values

|      Value       |                               Behavior                                |
| :--------------: | :-------------------------------------------------------------------: |
| static (default) |             Normal flow. top/left/right/bottom do nothing             |
|     relative     |         Stays in place, but can be nudged with top/left/etc.          |
|     absolute     | Removed from flow; positioned relative to nearest positioned ancestor |
|      fixed       |     Positioned relative to the viewport; stays put when scrolling     |
|      sticky      |       Acts relative, then sticks when scrolled past a threshold       |

> Offsets top, right, bottom, left work with positioned elements (not static).

## Common Filter Functions

|    Filter     |                          Example Effect                          |
| :-----------: | :--------------------------------------------------------------: |
|    blur()     |                          blur(5px) Blur                          |
| brightness()  |                 brightness(150%) Brighter/darker                 |
|  contrast()   |                  contrast(200%) Boost contrast                   |
|  grayscale()  |                  grayscale(100%) Black & white                   |
|    sepia()    |                    sepia(80%) Old-photo look                     |
|  saturate()   |                 saturate(200%) More vivid colors                 |
| hue-rotate()  |                  hue-rotate(90deg) Shift colors                  |
|   invert()    |                    invert(100%) Invert colors                    |
|   opacity()   |                    opacity(50%) Transparency                     |
| drop-shadow() | drop-shadow(2px 2px 4px black) Shadow that respects transparency |

## Common Pseudo-classes

|     Pseudo-class     |      When it applies       |
| :------------------: | :------------------------: |
|        :hover        |         Mouse over         |
|        :focus        |  Element is focused (Tab)  |
|       :active        |       Being clicked        |
|       :visited       |        Link visited        |
|     :first-child     |   First child of parent    |
|     :last-child      |         Last child         |
|    :nth-child(n)     |     Specific position      |
| :nth-child(odd/even) |       Odd/even rows        |
|    :not(selector)    | Excludes matching elements |
|       :checked       |   Checked checkbox/radio   |
| :disabled / :enabled |         Form state         |
|      :required       |    Required form field     |
