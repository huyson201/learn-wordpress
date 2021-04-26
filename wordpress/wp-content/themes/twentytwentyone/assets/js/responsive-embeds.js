r doxygenBoldWord             term=bold cterm=bold gui=bold
      SynColor doxygenEmphasisedWord       term=italic cterm=italic gui=italic
      SynLink  doxygenArgumentWord         doxygenEmphasisedWord
      SynLink  doxygenHtmlCode             doxygenCodeWord
      SynLink  doxygenHtmlBold             doxygenBoldWord
      SynColor doxygenHtmlBoldUnderline       term=bold,underline cterm=bold,underline gui=bold,underline
      SynColor doxygenHtmlBoldItalic          term=bold,italic cterm=bold,italic gui=bold,italic
      SynColor doxygenHtmlBoldUnderlineItalic term=bold,italic,underline cterm=bold,italic,underline gui=bold,italic,underline
      SynColor doxygenHtmlUnderline        term=underline cterm=underline gui=underline
      SynColor doxygenHtmlUnderlineItalic  term=italic,underline cterm=italic,underline gui=italic,underline
      SynColor doxygenHtmlItalic           term=italic cterm=italic gui=italic
    endif

  finally
    if s:my_synlink | delcommand SynLink | endif
    if s:my_syncolor | delcommand SynColor | endif
  endtry

  if &syntax=='idl'
    syn cluster idlCommentable add=doxygenCommen