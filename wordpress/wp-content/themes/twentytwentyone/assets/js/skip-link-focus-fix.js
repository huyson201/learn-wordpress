" Vim syntax file
" Language:	Dracula
" Maintainer:	Scott Bordelon <slb@artisan.com>
" Last change:  Wed Apr 25 18:50:01 PDT 2001
" Extensions:   drac.*,*.drac,*.drc,*.lvs,*.lpe
" Comment:      Dracula is an industry-standard language created by CADENCE (a
"		company specializing in Electronics Design Automation), for
"		the purposes of Design Rule Checking, Layout vs. Schematic
"		verification, and Layout Parameter Extraction.

" quit when a syntax file was already loaded
if exists("b:current_syntax")
  finish
endif

" Ignore case
syn case ignore

" A bunch of useful Dracula keywords

"syn match   draculaIdentifier

syn keyword draculaStatement   indisk primary outdisk printfile system
syn keyword draculaStatement   mode scale resolution listerror keepdata
syn keyword draculaStatement 