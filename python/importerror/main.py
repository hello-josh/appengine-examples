#!/usr/bin/env python
#
# KAPx
#
# Copyright (c) 2014, Kaplan Inc
#
# All rights reserved.

__author__ = 'Joshua Johnston <jojohnston@kaplan.edu>'

import webapp2

class Handler(webapp2.RequestHandler):
    def get(self):
        self.response.write('hi')


app = webapp2.WSGIApplication([
    webapp2.Route('/', handler=Handler),
])
