# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr>   # noqa: E501

    OpenAPI spec version: 1.0.4402212019
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class AnalyticsUsageUsage(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'endpoint_minutes': 'int',
        'num_endpoints': 'int',
        'num_meetings': 'int',
        '_date': 'int'
    }

    attribute_map = {
        'endpoint_minutes': 'endpointMinutes',
        'num_endpoints': 'numEndpoints',
        'num_meetings': 'numMeetings',
        '_date': 'Date'
    }

    def __init__(self, endpoint_minutes=None, num_endpoints=None, num_meetings=None, _date=None):  # noqa: E501
        """AnalyticsUsageUsage - a model defined in Swagger"""  # noqa: E501

        self._endpoint_minutes = None
        self._num_endpoints = None
        self._num_meetings = None
        self.__date = None
        self.discriminator = None

        if endpoint_minutes is not None:
            self.endpoint_minutes = endpoint_minutes
        if num_endpoints is not None:
            self.num_endpoints = num_endpoints
        if num_meetings is not None:
            self.num_meetings = num_meetings
        if _date is not None:
            self._date = _date

    @property
    def endpoint_minutes(self):
        """Gets the endpoint_minutes of this AnalyticsUsageUsage.  # noqa: E501


        :return: The endpoint_minutes of this AnalyticsUsageUsage.  # noqa: E501
        :rtype: int
        """
        return self._endpoint_minutes

    @endpoint_minutes.setter
    def endpoint_minutes(self, endpoint_minutes):
        """Sets the endpoint_minutes of this AnalyticsUsageUsage.


        :param endpoint_minutes: The endpoint_minutes of this AnalyticsUsageUsage.  # noqa: E501
        :type: int
        """

        self._endpoint_minutes = endpoint_minutes

    @property
    def num_endpoints(self):
        """Gets the num_endpoints of this AnalyticsUsageUsage.  # noqa: E501


        :return: The num_endpoints of this AnalyticsUsageUsage.  # noqa: E501
        :rtype: int
        """
        return self._num_endpoints

    @num_endpoints.setter
    def num_endpoints(self, num_endpoints):
        """Sets the num_endpoints of this AnalyticsUsageUsage.


        :param num_endpoints: The num_endpoints of this AnalyticsUsageUsage.  # noqa: E501
        :type: int
        """

        self._num_endpoints = num_endpoints

    @property
    def num_meetings(self):
        """Gets the num_meetings of this AnalyticsUsageUsage.  # noqa: E501


        :return: The num_meetings of this AnalyticsUsageUsage.  # noqa: E501
        :rtype: int
        """
        return self._num_meetings

    @num_meetings.setter
    def num_meetings(self, num_meetings):
        """Sets the num_meetings of this AnalyticsUsageUsage.


        :param num_meetings: The num_meetings of this AnalyticsUsageUsage.  # noqa: E501
        :type: int
        """

        self._num_meetings = num_meetings

    @property
    def _date(self):
        """Gets the _date of this AnalyticsUsageUsage.  # noqa: E501


        :return: The _date of this AnalyticsUsageUsage.  # noqa: E501
        :rtype: int
        """
        return self.__date

    @_date.setter
    def _date(self, _date):
        """Sets the _date of this AnalyticsUsageUsage.


        :param _date: The _date of this AnalyticsUsageUsage.  # noqa: E501
        :type: int
        """

        self.__date = _date

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value
        if issubclass(AnalyticsUsageUsage, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, AnalyticsUsageUsage):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
