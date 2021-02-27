from OpenGL.GL import *
from OpenGL.GLU import *
from OpenGL.GLUT import *
from numpy import *
import sys
def init():
    glClearColor(1.0, 1.0, 1.0, 1.0)
    gluOrtho2D(-5.0, 5.0, -5.0, 5.0)
def plotPoints():
    glBegin(GL_)
    .
    .
    glEND()
    for x in arange(-5,5,0.1):
        y = x * x
        a = 7*x
        glBegin(GL_POINTS)
        gl